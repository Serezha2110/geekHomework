<?php


class Product
{
    private $price;
    private $weight;
    private $distance;

    function __construct($price, $weight, $distance)
    {
        if ($weight < 10){
            $weight = 20;
        }
        $this->price = $price;
        $this->weight = $weight;
        $this->distance = $distance;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function calculateCostOfTransfer()
    {
        return $this->weight * $this->distance / 20 + 50;
    }


}