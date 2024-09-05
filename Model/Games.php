<?php

class Game extends Articol{
    private $measure;
    private $material;
    

    public function __construct(Category $_category, string $_title, string $_img, float $_price,string $_measure,string $_material )
    {  
        parent::__construct($_category, $_title, $_img,$_price);
        $this->setMaterial($_measure);
        $this->setMaterial($_material);
    }

    public function getMeasure(){
        return $this->measure;
    }

    public function sertMeasure($_measure){
        $this->material=$_measure;
    }

    
    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($_material){
        $this->material=$_material;
    }

}