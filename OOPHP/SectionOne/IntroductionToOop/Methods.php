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
$basket->discount = 30;

$subTotal = $basket->calculateSubTotal();

var_dump($subTotal);
