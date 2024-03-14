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
