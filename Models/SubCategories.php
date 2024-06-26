<?php

require_once 'Categoria.php';
require_once 'Prodotto.php';

class SubCategories extends Categoria
{
    private $subcategory;
    private $product;

    public function __construct($subcategory, Categoria $category, Prodotto $product)
    {
        parent::__construct($category->getName());
        $this->subcategory = $subcategory;
        $this->product = $product;
    }

    public function getSubcategory()
    {
        return $this->subcategory;
    }

    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Prodotto $product)
    {
        $this->product = $product;
    }
}
