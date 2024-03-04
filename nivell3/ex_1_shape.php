<?php

// Exercici 3: POO 2: Shape + Circle.
echo "--- Exercici 3 --- \n";

abstract class Shape
{
    // Properties are protected so they can be accessed by the child classes but not from outside the class.
    protected string $shapeName;
    protected float $base;
    protected float $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    abstract protected function area(): float;

    public function printArea()
    {
        $area = $this->area();
        echo "The area of this " . $this->shapeName . " is: " . $area .  "\n";
    }
}

class Triangle extends Shape
{
    protected string $shapeName = "triangle";
    
    protected function area(): float
    {
        return ($this->base * $this->height) / 2;
    }
}


class Rectangle extends Shape
{
    protected string $shapeName = "rectangle";
    
    protected function area(): float
    {
        return $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected string $shapeName = "circle";
    // As radius is a property of the Circle class, it is declared as private.
    private float $radius;

    // This constructor overrides the parent constructor.
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    protected function area(): float
    {
        // ** is the exponentiation operator in PHP.
        return pi() * $this->radius ** 2;
    }
}

$triangle = new Triangle(2, 3);
$triangle->printArea();
$rectangle = new Rectangle(2, 3);
$rectangle->printArea();
$circle = new Circle(1.5);
$circle->printArea();
