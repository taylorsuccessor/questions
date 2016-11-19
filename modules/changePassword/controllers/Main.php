<?php
namespace  App\modules\changePassword\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='changePassword';




    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE=2|LOGIN={{$login}}|CPASS={{$password}}|NPASS={{$newpassword}}|TYPE={{$passtype}}';



//public function index($resultMessage=''){
//    echo 'this is index of the child class overwrite it';
//}



}