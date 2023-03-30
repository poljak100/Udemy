<?php

class basket
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal()
    {
        $subTotal =  $this->itemsTotal +  $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

$basket = new basket();
$basket->itemsTotal = 100;
$basket->shippingCost = 30;
$basket->discount = 50;

$subTotal = $basket->calculateSubTotal();

var_dump($subTotal);

echo '<pre/>';

class Car
{
    public $engine;
    public $color;
    public $year;


    public function NewCar()
    {
        $car = $this->engine . '<pre/>' . $this->color . '<pre/>' . $this->year;
        return $car;
    }
}

$New = new Car();
$New->engine = 'V12';
$New->color = 'Blue';
$New->year = '1800';

$car = $New->NewCar();
print_r($car);
