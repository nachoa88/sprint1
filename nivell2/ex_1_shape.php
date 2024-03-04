<?php

// Exercici 2: POO 2: Shape.
echo "--- Exercici 2 --- \n";

abstract class Shape
{
    public float $height;
    public float $width;
    protected string $shapeName;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
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
        return ($this->height * $this->width) / 2;
    }
}


class Rectangle extends Shape
{
    protected string $shapeName = "rectangle";

    protected function area()
    {
        return $this->height * $this->width;
    }
}

$triangle = new Triangle(2, 3);
$triangle->printArea();
$rectangle = new Rectangle(2, 3);
$rectangle->printArea();
