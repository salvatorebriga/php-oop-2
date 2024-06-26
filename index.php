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

$prodotto1 = new SubCategories($toy, new Categoria($dog), new Prodotto('Name', 40, 'Description'));

var_dump($prodotto1);
