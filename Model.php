<?php
    session_start();
    require_once("conf.php");
    class Model{
        public static $pdo;
        public static function init(){
           $_SESSION['login']="fabrea";
           $_SESSION['password'] ="quahroh4pait";
           $_SESSION['database'] ="fabrea";
            self::$pdo = new PDO("mysql:host=localhost;dbname=".$_SESSION['database'],$_SESSION['login'],$_SESSION['password'],
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
       self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
          return self::$pdo;
        }
        
    }
    Model::init();


?>