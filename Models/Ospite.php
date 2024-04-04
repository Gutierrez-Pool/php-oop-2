<?php 

class Ospite {

    protected $nome;
    protected $email;

    protected $sconto = 0;

    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }


}

?>