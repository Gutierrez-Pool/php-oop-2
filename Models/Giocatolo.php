<?php 

require_once __DIR__ . "/Traits/HasMaterial.php";
// require_once __DIR__ . "/Prodotto.php";

class Giocatolo extends Prodotto {

    use HasMaterial;

    function __construct($nome, $prezzo, $immagine, Categoria $categoria) {
        parent::__construct($nome, $prezzo, $immagine, $categoria);

        $this->tipo = "Gioco";
    }
}