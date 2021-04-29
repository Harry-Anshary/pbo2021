<?php

namespace App;

class User{
    protected $username;
    protected $password;

    function __construct($un,$pw){
        $this->username = $un;
        $this->password = $pw;
    }

    public function login(){
        return "$this->username Successfully log in to the system.";
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}
?>