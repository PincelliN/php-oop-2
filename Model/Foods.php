<?php

class Food extends Articol{

    private $kcal;
    private $weight;
    private $tipe;

    public function __construct(Category $_category, string $_title, string $_img, float $_price,float $_kcal,float $_weight,string $_tipe )
    {
        
        parent::__construct($_category, $_title, $_img,$_price);
        $this->setKcal($_kcal);
        $this->setWeight($_weight);
        $this->setTipe($_tipe);

    }

    public function getkcal(){
        return $this->kcal;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getTipe(){
        return $this->tipe;
    }
    
    public function setKcal($_kcal){
        return $this->kcal=$_kcal;
    }
    public function setWeight($_weight){
        if($_weight != 3.0 && $_weight != 5.0 ){
             throw new Exception('Il peso non è un formato standard');
        }
        
      $this->weight=$_weight; 
    }
    public function setTipe($_tipe){
        $this->tipe=$_tipe;
    }

}