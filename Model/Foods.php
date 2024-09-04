<?php

class Foods extends Articols{

    public $kcal;
    public $weight;
    public $tipe;

    public function __construct(Category $_category, string $_title, string $_img, float $_price,float $_kcal,float $_weight,string $_tipe )
    {
        
        parent::__construct($_category, $_title, $_img,$_price);
        $this->kcal=$_kcal;
        $this->weight=$_weight;
        $this->tipe=$_tipe;

    }

}