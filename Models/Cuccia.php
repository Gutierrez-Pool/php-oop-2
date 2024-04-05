<?php

require_once __DIR__ . "/Traits/HasMaterial.php";
// require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto {

    use HasMaterial;
    public $misura;

    function __construct($nome, $prezzo, $immagine, Categoria $categoria, $misura) {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->misura = $misura;

        $this->tipo = "Cuccia";
    }
}