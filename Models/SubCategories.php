<?php
class SubCategories
{
    public $name;
    public $category;
    public $product;

    public function __construct($name, Categoria $category, Prodotto $product)
    {
        $this->name = $name;
        $this->category = $category;
        $this->product = $product;
    }
}
