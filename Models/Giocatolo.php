<?php 

require_once __DIR__ . "/Prodotto.php";

class Giocatolo extends Prodotto {
    public $materiale;

    function __construct($nome, $prezzo, $immagine, Categoria $categoria, $materiale) {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->materiale = $materiale;

        $this->tipo = "Gioco";
    }
}