<?php

require_once __DIR__ . "/Categoria.php";

class Prodotto {
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    protected $tipo;

    function __construct($nome, $prezzo, $immagine, Categoria $categoria) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getTipo() {
        return $this->tipo;
    }
}

?>