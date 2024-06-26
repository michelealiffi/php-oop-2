<?php

class Category
{

    public $name;
    public $description;

    public function __construct($nameCategory, $description = null)
    {
        $this->name = $nameCategory;
        $this->description = $description;
    }
}
