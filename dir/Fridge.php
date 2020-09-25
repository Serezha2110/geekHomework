<?php

include "Product.php";

class Fridge extends Product
{
    private $houseFloorNumber;

    function __construct($price, $weight, $distance, $houseFloorNumber)
    {
        parent::__construct($price, $weight, $distance);
        $this->houseFloorNumber = $houseFloorNumber;
    }

    function calculateTotalCost(){
        return $this->houseFloorNumber * 50 + $this->getPrice() + $this->calculateCostOfTransfer();
    }
}

// Test
$fridge = new Fridge(600, 50, 40, 4);
echo $fridge->calculateTotalCost();