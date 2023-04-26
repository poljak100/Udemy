<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require 'Animal.php';
    require 'Dog.php';
    require 'Cat.php';

    $animal = new Animal();
    $dog = new Dog();
    $cat = new Cat();

    $animal->makeSound();  // "The animal makes a sound"
    echo '<pre/>';
    $dog->makeSound(); // "The dog barks"
    echo '<pre/>';
    $cat->makeSound(); // "The cat meows"

    ?>

</body>

</html>