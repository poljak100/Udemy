<?php

require_once 'DataModel.php';

class Product extends DataModel
{
    private string $name;
    private float $price;
    protected string $tableName = 'product';




    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
