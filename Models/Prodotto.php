<?php
class Prodotto
{
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
