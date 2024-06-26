<?php

class Prodotto
{
    private string $name;
    private int $price;
    private string $description;
    private string $category;
    private string $subcategory;

    public function __construct(string $name, int $price, string $description, string $category, string $subcategory)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setCategory($category);
        $this->setSubcategory($subcategory);
    }

    public function __destruct()
    {
        return __CLASS__;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set the value of subcategory
     *
     * @return  self
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }
}
