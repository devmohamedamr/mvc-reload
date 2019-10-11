<?php

class app{

    public $controller = "home";



    public $method = "index";



    public $parm = [];


    public function __construct()
    {

        $url = $this->url();


        if(file_exists("app/controller/".$url[0].".php")){
            $this->controller = $url[0];
            unset($url[0]);

        }

        require_once "app/controller/".$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
            }
        unset($url[1]);

        }


//        print_r($url);die;

        $this->parm = $url ? $url : [];


        call_user_func_array([$this->controller,$this->method],$this->parm);



    }


    public function url(){
        if(isset($_GET['url'])){
           $url = explode("/",$_GET['url']);
            return $url;
        }
    }


}
