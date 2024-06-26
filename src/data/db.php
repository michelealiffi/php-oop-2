<?php

include __DIR__ . "../Models/Product.php";
include __DIR__ . "../Models/Category.php";

$categoryDog = new Category("For Dog");
$categoryCat = new Category("For Cat");

$singleProduct = [
    new Product(
        "TargetDog",
        $categoryDog,
        "8€"
    ),
    new Game(
        "ElectricBall",
        $categoryCat,
        "50€",
        "electric",
    ),

    new Kennel(
        "Sleep",
        $categoryDog,
        "10€",
        "two dog capacity",
        "strong material"
    )
];
