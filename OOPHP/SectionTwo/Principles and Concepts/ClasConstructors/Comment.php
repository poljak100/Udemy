<?php

class Comment
{
    public $name;
    public $age;
    public $country;

    public function __construct($name, $age, $country)
    {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }
}
