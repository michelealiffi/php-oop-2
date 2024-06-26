<?php

class Game extends Product
{
    public $electric;

    public function __construct($name, $category, $price, $electric)
    {

        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->electric = $electric;
    }
}
