<?php
namespace  App\modules\leverage\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='leverage';



    protected $fieldsArray=['login'=>'','password'=>'','leverage'=>''];
    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE=1|LOGIN={{$login}}|CPASS={{$password}}|LEVERAGE={{$leverage}}';




//public function index($resultMessage=''){
//    echo 'this is index of the child class overwrite it';
//}




}