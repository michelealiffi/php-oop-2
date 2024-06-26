<?php

class Kennel extends Product
{
    public $capacity;
    public $material;

    public function __construct($name, $category, $price, $capacity, $material)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->capacity = $capacity;
        $this->material = $material;
    }
}
