<?php



class Articols {
    public $title;
    public $img;
    public $price;
    public $category;

    public function __construct(Category $_category ,string $_title, string $_img, float $_price)
    {
        $this->category= $_category;
        $this->title = $_title;
        $this->img = $_img;
        $this->price = $_price;
    }
}