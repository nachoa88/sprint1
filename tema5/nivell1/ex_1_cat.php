<?php
require 'ex_1_animal.php';

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "My name is $this->name and I say: Meow!";
    }
}

$cat = new Cat("Garfield");
echo $cat->makeSound() . "\n";
