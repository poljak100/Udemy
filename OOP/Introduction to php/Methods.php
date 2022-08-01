<?php

class basket
{
    public $itemsTotal;
    public $shippingCost;

    public function calculateSubTotal()
    {
        $this->itemsTotal + $this->shippingCost;
    }
}

$basket = new basket();
$basket->itemsTotal = 50;
$basket->shippingCost = 10;

var_dump($basket);
