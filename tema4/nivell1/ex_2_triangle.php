<?php

require 'ex_2_shape.php';

class Triangle extends Shape
{
    public function area()
    {
        $className = get_class($this);
        echo "The area of this " . $className . " is: " . ($this->height * $this->base) / 2 .  "\n";
    }
}

$triangle = new Triangle(2, 3);
$triangle->area();