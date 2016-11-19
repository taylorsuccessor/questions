<?php 

include_once ("cfg.php");


extract($_POST);
$query='';
$ret='error';


switch($mode){
    case 1:

        $query = "|MODE=1|LOGIN=$login|CPASS=$password|LEVERAGE=$leverage";

        break;
    case 2:

        $query = "|MODE=2|LOGIN=$login|CPASS=$password|NPASS=$newpassword|TYPE=$passtype";

        break;
    case 3:

        $mode=($paymenttype<2)? 3:5;
        $amount=($paymenttype==0 || $paymenttype==2)?$amount1:-1*$amount1;

        $query = "|MODE=$mode|LOGIN=$login|CPASS=$password|AMOUNT=$amount|COMMENT=$comment1";

        break;
    case 4:

        $query = "|MODE=4|LOGIN=$login|CPASS=$password|TOACC=$toaccount|AMOUNT=$amount2";

        break;
    case 6;

        $send_reports=(isset($send_reports))? 1:0;
        $read_only=(isset($read_only))? 1:0;
        $newLogin=(isset($newLogin))? $newLogin:'';

        $query = "|MODE=6|IP=client_ip|GROUP=$group|NAME=$name|PASSWORD=$password1|INVESTOR=$investor_password|EMAIL=$email|COUNTRY=$country|STATE=$state|CITY=$city|ADDRESS=$address|COMMENT=$comment|PHONE=$phone|PHONE_PASSWORD=$phone_password|STATUS=$status|ZIPCODE=$zipcode|LEVERAGE=$leverage2|AGENT=$agent|SEND_REPORTS=$send_reports|DEPOSIT=$initial_deposit|LOGIN=$newLogin|ID=$nationalNum|READ_ONLY=$read_only";

        break;
        
    case 8;

        $send_reports4=(isset($send_reports4))? 1:0;
        $read_only4=(isset($read_only4))? 1:0;

        $query = "|MODE=8|LOGIN=$login|CPASS=$password|EMAIL=$email4|COUNTRY=$country4|STATE=$state4|CITY=$city4|ADDRESS=$address4|PHONE=$phone4|PHONE_PASSWORD=$phone_password4|STATUS=$status4|ZIPCODE=$zipcode4|AGENT=$agent4|SEND_REPORTS=$send_reports4|ID=$nationalNum4|READ_ONLY=$read_only4|AGENT=$agents4";

        break;
    default:

        echo "Invalid Request";
        exit(0);

}


$sentQuery = "WMQWEBAPI MASTER=".MT4_MASTER.$query."\nQUIT\n";

$ptr=@fsockopen(MT4_SERVER,MT4_PORT,$errno,$errstr,5); 

if($ptr) {
  if(fputs($ptr,$sentQuery)!=FALSE) {
      $ret='';
      while(!feof($ptr)) {
	 $line=fgets($ptr,12);

         if($line=="\r\n") break; 
         $ret.= $line;
      } 
 }
fclose($ptr);
}

$ret = preg_replace("#}[^}]*$#", '}', $ret);

$obj = json_decode($ret);

if($obj != ''){
echo constant($obj->result);

if($mode==6)
echo "<br>Account Number: ".$obj->data[0]->login;
}else {
    echo 'Error!';
}


?>
