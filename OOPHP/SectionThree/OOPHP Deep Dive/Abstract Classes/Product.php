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

    /**
     * @param string $ name
     */

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */

    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
