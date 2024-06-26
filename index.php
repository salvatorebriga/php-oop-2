<?php

require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/SubCategories.php';

//Lista delle categorie del mondo animale (es: cani, gatti o pesci)
//creo istanza Prodotti per cani
$dog = new Categoria('Cani');
$stringDog = $dog->getName();

//creo istanza prodotti per gatti
$cat = new Categoria('Gatti');
$stringCat = $cat->getName();


//Lista delle sottocategorie (giochi, cibo, cucce etc)
$subFood = new SubCategories('Cibo');
$stringFood = $subFood->getType();

$subToys = new SubCategories('Giocattolo');
$stringToys = $subToys->getType();

$subQol = new SubCategories('Cuccia');
$stringQol = $subQol->getType();

//Lista dei prodotti 
$prodotto1 = new Prodotto('Collare', 20, 'Descrizione Prodotto', $stringDog, $stringQol);
var_dump($prodotto1);

$prodotto2 = new Prodotto('Erba Gatta', 25, 'Descrizione Prodotto', $stringCat, $stringFood);
var_dump($prodotto2);
