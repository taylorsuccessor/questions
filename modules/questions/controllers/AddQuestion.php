<?php
namespace  App\modules\questions\controllers;

use App\core\controllers\BaseModules;

class AddQuestion extends BaseModules{
    protected $moduleName='questions';


function index(){

    $this->view('addQuestion');
}



}