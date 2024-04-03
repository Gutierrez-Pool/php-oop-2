<?php 

require './Models/Prodotto.php';
require './Models/Categoria.php';

$cani = new Categoria('cani','fa-solid fa-dog');
$gatti = new Categoria('gatti','fa-solid fa-cat');

$prodotto1 = new Prodotto('Palla','10.00','https://picsum.photos/300/200', $cani);

$prodotti = [
    $prodotto1,
]

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Pet Shop</h1>

        <div>
            <div>
                <?php 
                
                foreach ($prodotti as $prodotto) {
                ?>

                    <img src="<?= $prodotto->immagine ?>" alt="...">
                    <p><?= $prodotto->nome ?></p>
                    <p><?= $prodotto->prezzo ?></p>

            <?php
            }
            ?>
            </div>
        </div>
    </div>
    

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>