<?php
//require_once "../connexionBDD.class.php";
//require_once "./class/User.class.php";

class UsersDao extends Connexion {
    private static $_instance = null;

    private function __construct() {}
    
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new UsersDao();  
        }
        return self::$_instance;
    }
}
?>