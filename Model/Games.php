<?php

class Game extends Articol{
    public $measure;
    public $material;
    

    public function __construct(Category $_category, string $_title, string $_img, float $_price,string $_measure,string $_material )
    {  
        parent::__construct($_category, $_title, $_img,$_price);
        $this->measure=$_measure;
        $this->material=$_material;
    }

}