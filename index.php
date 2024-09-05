<?php

// Importazione dei file necessari contenenti il database e le classi del modello.
require_once __DIR__.'/data/db_shop.php'; // Database shop
require_once __DIR__.'/Model/Foods.php';  // Modello cibo
require_once __DIR__.'/Model/Kennels.php'; // Modello cuccia
require_once __DIR__.'/Model/Games.php';   // Modello giochi

//var_dump($db_shop);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Collegamento a Bootstrap CSS e FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet Shop OOP</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <!-- Colonna per gli articoli della categoria 'cane' -->
            <div class="col-6">
                <h3>Cane</h3>
                <?php foreach($db_shop as $element):?>
                <!-- Verifica se l'elemento appartiene alla categoria 'cane' -->
                <?php if ($element->category->name == 'cane'):?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->title ?></h5>
                        <ul>
                            <!-- Categoria dell'elemento -->
                            <li>Categoria:<?php echo $element->category->name?></li>
                            <!-- Prezzo dell'elemento -->
                            <li>Prezzo:<?php echo $element->price ?>$</li>
                            <!-- Tipologia dell'elemento: Cuccia, Giochi o Cibo -->
                            <li>Tipologia:
                                <?php 
                                        if (get_class($element) == 'Kennels') {
                                            echo 'Cuccie';
                                        } elseif(get_class($element) == 'Games') {
                                            echo 'Giochi';
                                        } else {
                                            echo 'Cibo';
                                        }
                                        ?>
                            </li>

                            <!-- Attributi specifici in base alla tipologia dell'elemento -->
                            <!-- Se è un elemento che ha colore e stagione -->
                            <?php if (isset($element->color)):?>
                            <?php echo "<li>Colore:$element->color</li>"?>
                            <?php echo "<li>Stagione:$element->season</li>"?>

                            <!-- Se è un elemento con taglia e materiale (come cuccia) -->
                            <?php elseif(isset($element->measure)):?>
                            <?php echo "<li>Taglia:$element->measure</li>"?>
                            <?php echo "<li>Materiale:$element->material</li>"?>

                            <!-- Se è un cibo, mostra Kcal, peso e tipo di animale -->
                            <?php elseif(isset($element->kcal)):?>
                            <?php echo "<li>Kcal:$element->kcal x 100g</li>"?>
                            <?php echo "<li>Peso:$element->weight Kg</li>"?>
                            <?php echo "<li>Consigliato per:$element->tipe</li>"?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>

            <!-- Colonna per gli articoli della categoria 'gatto' -->
            <div class="col-6">
                <h3>Gatto</h3>
                <?php foreach($db_shop as $element):?>
                <?php if ($element->category->name == 'gatto'):?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->title ?></h5>
                        <ul>
                            <li>Categoria:<?php echo $element->category->name?></li>
                            <li>Prezzo:<?php echo $element->price ?>$</li>
                            <li>Tipologia:
                                <?php 
                                        if (get_class($element) == 'Kennels') {
                                            echo 'Cuccie';
                                        } elseif(get_class($element) == 'Games') {
                                            echo 'Giochi';
                                        } else {
                                            echo 'Cibo';
                                        }
                                        ?>
                            </li>

                            <?php if (isset($element->color)):?>
                            <?php echo "<li>Colore:$element->color</li>"?>
                            <?php echo "<li>Stagione:$element->season</li>"?>

                            <?php elseif(isset($element->measure)):?>
                            <?php echo "<li>Taglia:$element->measure</li>"?>
                            <?php echo "<li>Materiale:$element->material</li>"?>

                            <?php elseif(isset($element->kcal)):?>
                            <?php echo "<li>Kcal:$element->kcal x 100g</li>"?>
                            <?php echo "<li>Peso:$element->weight Kg</li>"?>
                            <?php echo "<li>Consigliato per:$element->tipe</li>"?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>
    </div>

</body>

</html>