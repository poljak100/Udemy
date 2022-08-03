<?php

class user
{
    //create properties

    public $name;
    public $username;
    public $followerCount;
}

$DinoObject = new user();

$DinoObject->name = 'Dino';
$DinoObject->username = 'Poljak94';
$DinoObject->followerCount = '250';


echo '<pre/>';

print_r($DinoObject);
