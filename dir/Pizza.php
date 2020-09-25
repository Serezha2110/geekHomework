<?php

include "Product.php";

class Pizza extends Product
{
    private $quantity;

    function __construct($price, $weight, $distance, $quantity)
    {
        parent::__construct($price, $weight, $distance);
        $this->quantity = $quantity;
    }

    function calculateTotalCost(){
        return $this->quantity * $this->getPrice() + $this->calculateCostOfTransfer();
    }
}

// Test
$pizza = new Pizza(40, 0.9, 40, 6);
echo $pizza->calculateTotalCost();