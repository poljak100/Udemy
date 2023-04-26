<?php

require_once 'DataModel.php';

class Product extends DataModel
{
    private string $name;
    protected float $price;
    protected string $tableName;
    protected $host;





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
