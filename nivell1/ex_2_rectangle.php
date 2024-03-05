<?php
require 'ex_2_shape.php';

class Rectangle extends Shape
{
    public function area()
    {
        $className = get_class($this);
        echo "The area of this " . $className . " is: " . ($this->height * $this->base) . "\n";
    }
}

$rectangle = new Rectangle(2, 3);
$rectangle->area();
