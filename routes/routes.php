<?php
namespace  App\routes;

use App\core\controllers\BaseRoutes;

class routes extends BaseRoutes{






public function  getRoutes(){

    return array(
        '/add-question'=>array('alias'=>'addQuestion','class'=>'questions/controllers/AddQuestion@index'),
        '/leverage'=>array('alias'=>'leverage.index','class'=>'leverage/controllers/Main@index'),
        '/changePassword'=>array('alias'=>'changePassword.index','class'=>'changePassword/controllers/Main@index'),
         '/createMt4Account'=>array('alias'=>'changePassword.index','class'=>'createMt4Account/controllers/Main@index'),
         '/modifyMt4Account'=>array('alias'=>'modifyMt4Account.index','class'=>'modifyMt4Account/controllers/Main@index'),
        '/internalTransfer'=>array('alias'=>'changePassword.index','class'=>'internalTransfer/controllers/Main@index'),
        '/payment'=>array('alias'=>'changePassword.index','class'=>'payment/controllers/Main@index'),
       
    );
}

}