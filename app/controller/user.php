<?php
/**
 * Created by PhpStorm.
 * User: pc gamer
 * Date: 08/10/2019
 * Time: 06:33 م
 */

require_once "app/core/controller.php";

class user extends controller
{

    public function index($name = ''){

        require_once "app/model/usermodel.php";

        $data = new usermodel();
        $data = $data->getalluser();
//
//        $data = "mohamed amr";
        $this->view("user",$data);

    }

    public function mm(){
        echo "mm";
    }

}