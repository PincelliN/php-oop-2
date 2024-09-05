<?php
class Kennel extends Articol{

    private $color;
    private $season;
    

    public function __construct(Category $_category, string $_title, string $_img, float $_price,string $_color,string $_season )
    {  
        parent::__construct($_category, $_title, $_img,$_price);
       
        $this->setColor($_color);
        $this->setSeason($_season);
    }


    public function getColor(){
        return $this->color;
    }
    
    public function getSeason(){
        return $this->season;
    }

    public function setColor($_color){
        $this->color=$_color;
    }

    public function setSeason($_season){
        $this->season=$_season;
    }



   


}