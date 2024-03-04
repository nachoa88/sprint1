<?php

// Exercici 2: POO 2: Shape.
echo "--- Exercici 2 --- \n";

abstract class Shape
{
    public float $height;
    public float $width;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function area();
}

class Triangle extends Shape
{
    private string $shapeName = "triangle";

    public function area()
    {
        echo "The area of this " . $this->shapeName . " is: " . ($this->height * $this->width) / 2 .  "\n";
    }
}


class Rectangle extends Shape
{
    private string $shapeName = "rectangle";

    public function area()
    {
        echo "The area of this " . $this->shapeName . " is: " . ($this->height * $this->width) . "\n";
    }
}

$triangle = new Triangle(2, 3);
$triangle->area();
$rectangle = new Rectangle(2, 3);
$rectangle->area();
