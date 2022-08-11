<?php

class Product extends DataModel
{
    private string $name;
    private float $price;
    /** 
     *@return string
     */

    public function getName(): string
    {
        return $this->name;
    }
}
//...