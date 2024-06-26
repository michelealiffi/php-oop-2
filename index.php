<?php

include __DIR__ . "./src/data/db.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/iperH9IBTIalnkREa5pL" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP Shop</title>
</head>

<body>
    <div class="container">
        <?php foreach ($singleProduct as $product) {

            if (isset($product->category) && $product->category == $categoryDog) {
                echo "Doggo Material";
            } else {
                echo "Cat Material";
            }
            echo $product->name . $product->getDescription();
            if (isset($product->electric)) {
                echo $product->electric;
            }
            if (isset($product->capacity)) {
                echo $product->capacity;
            }
            if (isset($product->material)) {
                echo $product->material;
            }

            echo $product->price;
        } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>