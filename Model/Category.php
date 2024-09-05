<?php


class Category
{

    private $name;
    private $icon;


    public function __construct(string $_name, string $_icon)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
    }


    public function getName()
    {
        return $this->name;
    }


    public function getIcon()
    {
        return $this->icon;
    }

    public function setName($_name){
        $this->name=$_name;
    }

    public function setIcon($_icon){
        $this->icon=$_icon;
    }
}