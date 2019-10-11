<?php
/**
 * Created by PhpStorm.
 * User: pc gamer
 * Date: 08/10/2019
 * Time: 06:55 م
 */

class controller
{
    public function view($name,$data){

        if(file_exists("app/view/".$name.".php")){
            require_once "app/view/".$name.".php";
        }
    }


//    public function model($modelname){
//
//        require_once "../core/mysql.php";
//        $db = new mysqldb();
//
//        if(file_exists("app/model/".$modelname.".php")){
//            require_once "app/model/".$modelname.".php";
//        }
//    }
}