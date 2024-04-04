<?php 

require './Models/Prodotto.php';
require './Models/Categoria.php';

$cani = new Categoria('cani','fa-solid fa-dog');
$gatti = new Categoria('gatti','fa-solid fa-cat');

$prodotto1 = new Prodotto('Palla','$10.00','https://picsum.photos/300/200', $cani);
$prodotto2 = new Prodotto('Cibo','$15.00','https://picsum.photos/300/200', $gatti);
$prodotto3 = new Prodotto('Cuccia','$30.00', 'https://picsum.photos/300/200', $cani);


$prodotti = [
    $prodotto1,
    $prodotto2,
    $prodotto3,
]

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .card-img-top {
            position: relative;
        }

        .fa-solid {
            position: absolute;
            top: 8px;
            right: 8px;
            background-color: white;
            border-radius: 50%;
            padding: 10px;
        }


    </style>


</head>
<body style="background-color: darkslateblue">
    <div class="container">
            <h1 class="text-white p-5">
                Pet Shop
            </h1>
        
            <div class="d-flex justify-content-around">
                <?php 
                
                foreach ($prodotti as $prodotto) {
                ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card">
                        <div>
                            <img src="<?= $prodotto->immagine ?>" class="card-img-top" alt="...">
                            <i class="<?= $prodotto->categoria->getCategoria() ?>"></i>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4>
                                <?= $prodotto->nome ?>
                            </h4>
                            <div>
                                <?= $prodotto->prezzo ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
            </div>
    </div>
    

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>