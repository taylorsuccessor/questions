<?php
namespace  App\modules\payment\controllers;

use App\core\controllers\BaseModules;

class Main extends BaseModules{
    protected $moduleName='payment';



    protected $apiMessageTemplate='WMQWEBAPI MASTER={{$MT4_MASTER}}|MODE={{$mode}}|LOGIN={{$login}}|CPASS={{$password}}|AMOUNT={{$amount}}|COMMENT={{$comment1}}';




public function __construct(){

    if(isset($_POST['submit'])) {
        $_POST['mode'] = ($_POST['paymenttype'] < 2) ? 3 : 5;
        $_POST['amount'] = ($_POST['paymenttype'] == 0 || $_POST['paymenttype'] == 2) ? $_POST['amount1'] : -1 * $_POST['amount1'];
    }
}



}