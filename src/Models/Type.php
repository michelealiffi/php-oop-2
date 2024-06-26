<?php

class Type extends Product
{
    public function __construct($name, $category, $price, $type)
    {
        $this->name = $type;
    }
}
