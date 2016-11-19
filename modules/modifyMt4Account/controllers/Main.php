<?php
namespace  App\modules\modifyMt4Account\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='modifyMt4Account';


    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE=8|LOGIN={{$login}}|CPASS={{$password}}|EMAIL={{$email4}}|COUNTRY={{$country4}}|STATE={{$state4}}|CITY={{$city4}}|ADDRESS={{$address4}}|PHONE={{$phone4}}|PHONE_PASSWORD={{$phone_password4}}|STATUS={{$status4}}|ZIPCODE={{$zipcode4}}|AGENT={{$agent4}}|SEND_REPORTS={{$send_reports4}}|ID={{$nationalNum4}}|READ_ONLY={{$read_only4}}';

    public function __construct(){



        $_POST['send_reports4']=(isset($_POST['send_reports4']))? 1:0;
        $_POST['read_only4']=(isset($_POST['read_only4']))? 1:0;



    }



//public function index($resultMessage=''){
//    echo 'this is index of the child class overwrite it';
//}




}