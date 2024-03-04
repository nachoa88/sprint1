<?php

// Exercici 1: POO 2: Animal.
echo "--- Exercici 1 --- \n";

abstract class Animal
{
    public string $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function makeSound(): string;
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "My name is $this->name and I say: Meow!";
    }
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "My name is $this->name and I say: Guau!";
    }
}

$cat = new Cat("Garfield");
echo $cat->makeSound() . "\n";
$dog = new Dog("Pluto");
echo $dog->makeSound() . "\n";
