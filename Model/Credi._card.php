<?php


class Credit_card{
    public $code;
    public $release_of_data;
    public $date_of_expiration;
   


    public function __construct(string $_code,string $_release_of_data,string $_date_of_expiration)
    {
        $this->code=$_code;
        $this->release_of_data=$_release_of_data;
        $this->date_of_expiration=$_date_of_expiration;
   

    }
}