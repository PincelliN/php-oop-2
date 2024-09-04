<?php

class Foods extends Articols{

    public $kcal;
    public $weight;
    public $tipe;

    public function __construct(string $_name, string $_icon, string $_title, string $_img, float $_price,float $_kcal,float $_weight,string $_tipe )
    {
        
        parent::__construct($_name, $_icon, $_title, $_img,$_price);
        $this->kcal=$_kcal;
        $this->weight=$_weight;
        $this->tipe=$_tipe;

    }

}