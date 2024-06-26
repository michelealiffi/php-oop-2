<?php

include __DIR__ . "/Game.php";
include __DIR__ . "/Kennel.php";

class Product
{
    public $name;
    public $category;
    public $price;

    public function __construct($name, Category $categoryArg, $price)
    {

        $this->name = $name;
        $this->category = $categoryArg;
        $this->price = $price;
    }

    public function infoComplete()
    {
        return "$this->name $this->category $this->price";
    }

    public function getDescription()
    {

        return  $this->category->description . $this->category?->name;
    }
}
