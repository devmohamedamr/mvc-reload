<?php
/**
 * Created by PhpStorm.
 * User: pc gamer
 * Date: 08/10/2019
 * Time: 08:08 م
 */

require_once "app/core/mysql.php";

class usermodel
{
    public $db;
    public function __construct()
    {
        $this->db = new mysqldb();

    }

    public function getalluser(){
       $this->db->Execute("select * from `user`");
       return $this->db->GetRows();
    }

}