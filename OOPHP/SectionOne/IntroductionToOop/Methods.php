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

echo '<pre/>';

class Person
{
    public $city;
    public $age;
    public $car;

    public function newPerson()
    {
        $osoba = $this->city . '<pre/>' . $this->age . '<pre/>' . $this->car;

        return $osoba;
    }
}

$Newperson = new Person;
$Newperson->city = 'osijek';
$Newperson->age = '19';
$Newperson->car = 'bwm';

$Newperson1 = new Person;
$Newperson1->city = 'zagreb';
$Newperson1->age = '21';
$Newperson1->car = 'audi';

$osoba = $Newperson->newPerson();
print_r($osoba);

$osoba = $Newperson1->newPerson();
print_r($osoba);

echo '<pre/>';



class Dino
{
    public $name;
    public $username;
    public $age;

    public function NewDino()
    {
        $dino = $this->name  . $this->username  . $this->age;

        return $dino;
    }
}

$Dinoo = new Dino();
$Dinoo->name = 'Dinola';
$Dinoo->username = 'Poljak120389';
$Dinoo->age = '29';

$dino = $Dinoo->NewDino();
print_r($dino);

echo '<pre/>';



class Katarina
{
    public $skola;
    public $ime;
    public $godina;

    public function newKata()
    {
        $kata = $this->ime = 'dino' . $this->skola = 'Trgos'  . $this->godina = '99';
        return $kata;
    }
}

$novaKata = new Katarina();
$novaKata->ime = 'Katarina';
$novaKata->skola = 'medicina';
$novaKata->godina = '2';

//$kata = $novaKata->newKata();
print_r($novaKata);
