<?php

// Exercici 2: POO Bàsic: Shape.
echo "--- Exercici 2 --- \n";

class Shape
{
    public float $height;
    public float $base;

    function __construct($height, $base)
    {
        $this->height = $height;
        $this->base = $base;
    }
}