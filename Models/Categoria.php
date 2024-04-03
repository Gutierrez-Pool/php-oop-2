<?php 

class Categoria { 
    public $nome;
    public $icono;

    public function __construct($nome, $icono) {
        $this->nome = $nome;
        $this->icono = $icono;
    }
    public function getCategoria() {
        return $this->icono;
    }
}

?>