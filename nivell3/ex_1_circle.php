<?php
require 'ex_1_shape.php';

class Circle extends Shape
{
    // As radius is a property of the Circle class, it is declared as private.
    private float $radius;

    // This constructor overrides the parent constructor.
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    protected function area(): float
    {
        // ** is the exponentiation operator in PHP.
        return pi() * $this->radius ** 2;
    }
}

$circle = new Circle(1.5);
$circle->printArea();
