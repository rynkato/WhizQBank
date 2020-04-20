<?php

include_once 'Login.php';
include_once 'Register.php';

class Credentials {

    function getLogin() {
        return new Login();
    }

    function getRegister() {
        return new Register();
    }

}