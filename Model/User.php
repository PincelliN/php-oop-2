<?php


class User{
    public $name;
    public $surname;
    public $date_of_birth;
    public $discount=0;
    public $credit_card;


    public function __construct(string $_name,string $_surname,string $_date_of_birth,int $_discount,Credit_card $credit_card)
    {
        $this->name=$_name;
        $this->surname=$_surname;
        $this->date_of_birth=$_date_of_birth;
        $this->discount=$_discount;
        $this->credit_card=$credit_card;
    }



    public function getDiscount(){
        if (isset($this->credit_card) && $this->credit_card->date_of_expiration <= date("Y-m-d")) {
            return $this->discount=20;
        }
    }
}