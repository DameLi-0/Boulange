<?php
require_once "./model/manager/userDAO.class.php";
require_once "./outil/Securite.class.php";

class UserControleur {
    private $userDao;

    public function __construct(){
        $this->userDao = UsersDao::getInstance();
    }
    function creerCompteAbonne(){
        require "vue/creerAbonne.view.php";
    }
}

