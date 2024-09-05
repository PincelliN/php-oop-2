<?php


require_once __DIR__.'/../Model/Category.php';
require_once __DIR__.'/../Model/Articols.php';
require_once __DIR__.'/../Model/Foods.php';
require_once __DIR__.'/../Model/Games.php';
require_once __DIR__.'/../Model/Kennels.php';

$dog_categoty= new Category("cane","fa-solid fa-dog");
$cat_category= new Category("gatto","fa-solid fa-cat");

$db_shop=[
    new Kennel($dog_categoty,"Amico Fedele","img\cucciaacne (2).jpg",49.99,"marrone","inverno"),
    new Kennel($cat_category,"Felino Elegante","img\cucciagatto (1).jpg",39.99,"grigio","autunno"),
    new Game($dog_categoty,"Pallina","img\bacchetta (2).jpg",49.99,"medium","pelle"),
    new Game($cat_category,"Bacchetta","img\bacchetta (1).jpg",39.99,"small","stoffa"),
    new Food($dog_categoty,"Amico Cane","img\pappacane.jpg",49.99,350.0,5.0,"adulto"),
    new Food($cat_category,"Amico Felino","img\pappa gatto.jpg",39.99,250.0,3.0,"cuccioli")
];