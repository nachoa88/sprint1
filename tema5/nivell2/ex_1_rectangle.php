<?php
require 'ex_1_shape.php';

class Rectangle extends Shape
{
    protected function area()
    {
        return $this->base * $this->height;
    }
}

$rectangle = new Rectangle(2, 3);
$rectangle->printArea();
