<?php



class Articol {
    protected $title;
    protected $img;
    protected $price;
    protected $category;

    public function __construct(Category $_category ,string $_title, string $_img, float $_price)
    {
        $this->setCategoty($_category);
        $this->setTitle($_title);
        $this->setimg($_img);
        $this->setPrice($_price);
    }

    public function getTitle(){
        return $this->title;
    }

    public function getImg(){
        return $this->img;
    }

    public function getPrice(){
        return $this->price;
    }
     
    public function getCategory(){
        return $this->category;
    }





    public function setTitle($_title){
        $this->title=$_title;
    }

    public function setimg($_img){
        $this->img=$_img;
    }

    public function setPrice($_price){
        if($_price > 100)
        {
            throw new Exception('Sei sicuro di non star spendendo un pò troppo');
        }
        
        $this->price=$_price;
    }

    public function setCategoty($_category){
        $this->category=$_category;
    }
}