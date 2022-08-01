<?php

class basket
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal()
    {
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

$basket = new basket();
$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;


var_dump($basket->calculateSubTotal());
