<?php

require_once __DIR__ . "/Prodotto.php";

require_once __DIR__ . "/Traits/HasDimension.php";

class Cibo extends Prodotto {

    use HasDimension;
    public $ingredientePrincipale;

    /**
     * __construct
     *
     * @param  string $nome
     * @param  float $prezzo
     * @param  Categoria $categoria
     * @param  string $image
     * @param  string $ingredientePrincipale
     */
    function __construct($nome, $prezzo, $immagine, Categoria $categoria, $ingredientePrincipale) {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->ingredientePrincipale = $ingredientePrincipale;

        $this->tipo = "Cibo";
    }
}