<?php

class Games extends Articols{
    public $measure;
    public $material;
    

    public function __construct(string $_name, string $_icon, string $_title, string $_img, float $_price,string $_measure,string $_material )
    {  
        parent::__construct($_name, $_icon, $_title, $_img,$_price);
        $this->measure=$_measure;
        $this->material=$_material;
    }

}