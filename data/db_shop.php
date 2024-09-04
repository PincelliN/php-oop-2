<?php


require_once __DIR__.'/../Model/Category.php';
require_once __DIR__.'/../Model/Articols.php';
require_once __DIR__.'/../Model/Foods.php';
require_once __DIR__.'/../Model/Games.php';
require_once __DIR__.'/../Model/Kennels.php';

$dog_categoty= new Category("cane","fa-solid fa-dog");
$cat_category= new Category("gatto","fa-solid fa-cat");

$db_shop=[
    new Kennels($dog_categoty,"Amico Fedele","img\cucciaacne (2).jpg",49.99,"marrone","inverno"),
    new Kennels($cat_category,"Felino Elegante","img\cucciagatto (1).jpg",39.99,"grigio","autunno"),
    new Games($dog_categoty,"Pallina","img\bacchetta (2).jpg",49.99,"medium","pelle"),
    new Games($cat_category,"Bacchetta","img\bacchetta (1).jpg",39.99,"small","stoffa"),
    new Foods($dog_categoty,"Amico Cane","img\pappacane.jpg",49.99,350.0,5.0,"adulto"),
    new Foods($cat_category,"Amico Felino","img\pappa gatto.jpg",39.99,250.0,3.0,"cuccioli")
];