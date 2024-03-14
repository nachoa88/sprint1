<?php

// Exercici 3: POO 2: Shape + Circle.
echo "--- Exercici 3 --- \n";

abstract class Shape
{
    // Properties are protected so they can be accessed by the child classes but not from outside the class.
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
        $className = get_class($this);
        echo "The area of this " . $className . " is: " . $area .  "\n";
    }
}
