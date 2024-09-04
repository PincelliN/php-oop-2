<?php


require_once __DIR__.'/data/db_shop.php';
require_once __DIR__.'/Model/Foods.php';
require_once __DIR__.'/Model/Kennels.php';
require_once __DIR__.'/Model/Games.php';


var_dump($db_shop);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="col-6">

                <h3>Cane</h3>
                <?php foreach($db_shop as $element):?>
                <?php if ($element->category->name == 'cane'):?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->title ?></h5>
                        <ul>
                            <li>Categoria:<?php echo $element->category->name?>
                            </li>
                            <li>Prezzo:<?php echo $element->price ?>$</li>
                            <li>Tipologia:<?php if (get_class($element)=='Kennels') {
                                echo 'Cuccie';
                            }elseif(get_class($element)=='Games') {
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
                <?endif?>
                <?php endforeach;?>


            </div>
            <div class="col-6">
                <h3>Gatto</h3>
                <?php foreach($db_shop as $element):?>
                <?php if ($element->category->name == 'gatto'):?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $element->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $element->title ?></h5>
                        <ul>
                            <li>Categoria:<?php echo $element->category->name?>

                            </li>
                            <li>Prezzo:<?php echo $element->price ?>$</li>
                            <li>Tipologia:<?php if (get_class($element)=='Kennels') {
                                echo 'Cuccie';
                            }elseif(get_class($element)=='Games') {
                                 echo 'Giochi';
                            } else {
                                echo 'Cibo';
                            }  ?>
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
                <?endif?>
                <?php endforeach;?>
            </div>
        </div>
    </div>



</body>

</html>