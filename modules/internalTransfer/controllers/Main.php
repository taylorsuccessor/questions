<?php
namespace  App\modules\internalTransfer\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='internalTransfer';



    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE=4|LOGIN={{$login}}|CPASS={{$password}}|TOACC={{$toaccount}}|AMOUNT={{$amount2}}';



}