<?php
class Kennels extends Articols{

   
    public $color;
    public $season;
    

    public function __construct(string $_name, string $_icon, string $_title, string $_img, float $_price,string $_color,string $_season )
    {  
        parent::__construct($_name, $_icon, $_title, $_img,$_price);
       
        $this->color=$_color;
        $this->season=$_season;
    }

}