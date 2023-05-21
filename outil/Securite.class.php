<?php

class Securite {
    public static function verifAccessAdmin(){
        return (isset($_SESSION['role']) && !empty($_SESSION['role']) && $_SESSION['role'] === "admin");
    }
}