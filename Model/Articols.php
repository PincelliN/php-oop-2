<?php



class Articols extends Category
{
    public $title;
    public $img;
    public $price;

    public function __construct(string $_name, string $_icon, string $_title, string $_img, float $_price)
    {
        parent::__construct($_name, $_icon);
        $this->title = $_title;
        $this->img = $_img;
        $this->price = $_price;
    }
}