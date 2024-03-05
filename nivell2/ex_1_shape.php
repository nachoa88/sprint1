<?php

// Exercici 2: POO 2: Shape.
echo "--- Exercici 2 --- \n";

abstract class Shape
{
    public float $base;
    public float $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    abstract protected function area();

    public function printArea()
    {
        $area = $this->area();
        $className = get_class($this);
        echo "The area of this " . $className . " is: " . $area .  "\n";
    }
}
