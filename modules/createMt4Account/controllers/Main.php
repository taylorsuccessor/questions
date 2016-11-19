<?php
namespace  App\modules\createMt4Account\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='createMt4Account';


    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE=6|IP=client_ip|GROUP={{$group}}|NAME={{$name}}|PASSWORD={{$password}}|INVESTOR={{$investor_password}}|EMAIL={{$email}}|COUNTRY={{$country}}|STATE={{$state}}|CITY={{$city}}|ADDRESS={{$address}}|COMMENT={{$comment}}|PHONE={{$phone}}|PHONE_PASSWORD={{$phone_password}}|STATUS={{$status}}|ZIPCODE={{$zipcode}}|LEVERAGE={{$leverage2}}|AGENT={{$agent}}|SEND_REPORTS={{$send_reports}}|DEPOSIT={{$initial_deposit_for_demo_account}}|READ_ONLY=1|LOGIN={{$newLogin}}|ID={{$nationalNum}}|READ_ONLY={{$read_only}}';

    public function __construct(){

        $_POST['send_reports']=(isset($_POST['send_reports']))? 1:0;
        $_POST['read_only']=(isset( $_POST['read_only']))? 1:0;
        $_POST['newLogin']=(isset( $_POST['newLogin']))?  $_POST['newLogin']:'';

    }



//public function index($resultMessage=''){
//    echo 'this is index of the child class overwrite it';
//}




}