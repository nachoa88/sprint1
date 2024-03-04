<?php

// Exercici 2: POO 2: Shape.
echo "--- Exercici 2 --- \n";

abstract class Shape
{
    public float $base;
    public float $height;
    protected string $shapeName;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    abstract protected function area();

    public function printArea()
    {
        $area = $this->area();
        echo "The area of this " . $this->shapeName . " is: " . $area .  "\n";
    }
}

class Triangle extends Shape
{
    protected string $shapeName = "triangle";

    protected function area()
    {
        return ($this->base * $this->height) / 2;
    }
}


class Rectangle extends Shape
{
    protected string $shapeName = "rectangle";

    protected function area()
    {
        return $this->base * $this->height;
    }
}

$triangle = new Triangle(2, 3);
$triangle->printArea();
$rectangle = new Rectangle(2, 3);
$rectangle->printArea();
