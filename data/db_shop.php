<?php


require_once __DIR__.'/../Model/Category.php';
require_once __DIR__.'/../Model/Articols.php';
require_once __DIR__.'/../Model/Foods.php';
require_once __DIR__.'/../Model/Games.php';
require_once __DIR__.'/../Model/Kennels.php';


$db_shop=[
    new Kennels("cane","🐶","Amico Fedele","cane.jpg",49.99,"marrone","inverno"),
    new Kennels("gatto","🐱","Felino Elegante","gatto.jpg",39.99,"grigio","autunno"),
    new Games("cane","🐶","Pallina","cane.jpg",49.99,"medium","pelle"),
    new Games("gatto","🐱","Bacchetta","gatto.jpg",39.99,"small","stoffa"),
    new Foods("cane","🐶","Amico Cane","cane.jpg",49.99,350.0,5.0,"adulto"),
    new Foods("gatto","🐱","Amico Felino","gatto.jpg",39.99,250.0,3.0,"gattino")

    
];