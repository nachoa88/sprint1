<?php
require 'ex_1_shape.php';

class Triangle extends Shape
{
    protected function area()
    {
        return ($this->base * $this->height) / 2;
    }
}

$triangle = new Triangle(2, 3);
$triangle->printArea();
