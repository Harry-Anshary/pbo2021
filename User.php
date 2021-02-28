<?php
class User{
    public $username;
    public $password;

    function __construct($un,$pw){
        $this->username = $un;
        $this->password = $pw;
    }

    public function login(){

    }
}
?>