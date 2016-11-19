<?php
namespace App\core\controllers;

use App\core\controllers\Api;


class BaseModules{


    protected $moduleName='';


    protected $childClassName='';

    protected $viewHeader='';
    protected $viewFooter='';
    public function __construct(){
        $this->childClassName= get_called_class();

        $this->viewHeader=baseFile('/default/views/header.php');
        $this->viewFooter=baseFile('/default/views/footer.php');
    }



    public function index(){




    }


    public function postIndex(){


    }


    public function view($viewPath,$params=[]){

        $viewPath=moduleViewPath($viewPath,$this->moduleName);

        extract($params);

        extract(include baseFile('/config/main.php'));

        if(!empty($this->viewHeader)){
            include($this->viewHeader);
        }
        if(file_exists($viewPath)){
            include $viewPath;
        }else{
            customException(['message'=>trans('file_not_exist').$viewPath,'number'=>1,'details'=>'']);
        }
        if(!empty($this->viewFooter)){
            include($this->viewFooter);
        }
    }

}
