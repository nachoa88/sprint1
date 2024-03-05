<?php
require 'ex_1_animal.php';

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "My name is $this->name and I say: Guau!";
    }
}

$dog = new Dog("Pluto");
echo $dog->makeSound() . "\n";
