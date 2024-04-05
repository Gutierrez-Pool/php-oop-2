<?php

require_once __DIR__ ."/Ospite.php";
class Iscritto extends Ospite {

    protected $username;

    protected $password;


    function __construct($username, $nome, $email) {
        $this->username = $username;
        parent::__construct($nome, $email);
    }
    
    public function setPassword($newPassword) {
        if (strlen($newPassword) < 8) {
            $newPassword = str_pad($newPassword, 8, 'x');
        }
        $this->password = $newPassword;
    }

}