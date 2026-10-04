<?php

class Product
{
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price)
    {
        if (!is_string($description)) {
            echo "Error: Description must be a string.<br>";
        } else {
            $this->description = $description;
        }

        if (!is_numeric($quantity)) {
            echo "Error: Quantity must be a number.<br>";
        } else {
            $this->quantity = $quantity;
        }

        if (!is_numeric($price)) {
            echo "Error: Price must be a number.<br>";
        } else {
            $this->price = $price;
        }
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function calculatePrice()
    {
        return $this->quantity * $this->price;
    }
}

$product = new Product("Laptop", 2, 75000);

echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price: " . $product->getPrice() . "<br>";
echo "Total Price: " . $product->calculatePrice();

?>