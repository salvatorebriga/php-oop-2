<?php

require_once __DIR__ . '/Models/SubCategories.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';

// subcategories
$toy = 'Toy';
$food = 'Food';
$qol = 'Quality Of Life';

// categories
$dog = 'Cani';
$cats = 'Gatti';

$description = 'Product Description TextArea';

$prodotti = [
    $prodotto1 = new SubCategories($toy, new Categoria($dog), new Prodotto('Name', 10, $description)),
    $prodotto2 = new SubCategories($qol, new Categoria($cats), new Prodotto('Name', 20, $description)),
    $prodotto3 = new SubCategories($food, new Categoria($dog), new Prodotto('Name', 40, $description)),
    $prodotto4 = new SubCategories($toy, new Categoria($dog), new Prodotto('Name', 25, $description)),
    $prodotto5 = new SubCategories($qol, new Categoria($cats), new Prodotto('Name', 30, $description)),
    $prodotto6 = new SubCategories($food, new Categoria($dog), new Prodotto('Name', 55, $description)),
    $prodotto7 = new SubCategories($toy, new Categoria($dog), new Prodotto('Name', 45, $description)),
    $prodotto8 = new SubCategories($toy, new Categoria($cats), new Prodotto('Name', 50, $description)),
    $prodotto9 = new SubCategories($food, new Categoria($dog), new Prodotto('Name', 90, $description)),
    $prodotto10 = new SubCategories($toy, new Categoria($dog), new Prodotto('Name', 45, $description)),
    $prodotto11 = new SubCategories($toy, new Categoria($cats), new Prodotto('Name', 50, $description)),
    $prodotto12 = new SubCategories($food, new Categoria($dog), new Prodotto('Name', 90, $description)),
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col mb-4">
                    <div class="card">
                        <h4><?php echo htmlspecialchars($prodotto->getProduct()->getName()); ?></h4>
                        <p class="fs-4"><?php echo 'Price: ' . htmlspecialchars($prodotto->getProduct()->getPrice()); ?> €</p>
                        <p class="fs-4"><?php echo htmlspecialchars($prodotto->getProduct()->getDescription()); ?></p>
                        <p class="fs-4"><?php echo 'Product for: ' . htmlspecialchars($prodotto->getName()); ?></p>
                        <p class="fs-4"><?php echo 'Subcategorie: ' . htmlspecialchars($prodotto->getSubcategory()); ?></p>

                    </div>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>