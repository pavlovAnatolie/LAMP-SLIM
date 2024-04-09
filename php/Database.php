<?php
/*
class Database extends mysqli{
 private static $instance= null;

 public function __construct ($hostname =null,$username = null,$password = null,$database = null){
    parent::__construct($hostname ,$username,$password,$database);
var_dump($hostname);

 }

 static function getInstance(){
    if(self::$instance == null){
        include "dbconfig.php";

        self::$instance = new Database($host,$user,$password,$dbname);


    }
    return self::$instance;
 }
}*/