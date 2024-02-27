<?php

// Exercici 1: POO Bàsic
echo "--- Exercici 1 --- \n";

class Employee
{
    public $name;
    public $salary;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


    public function hasToPayTaxes()
    {
        if ($this->salary > 6000) {
            echo $this->name . " has to pay taxes because his salary is " . $this->salary . "€" . "\n";
        } else {
            echo $this->name . " doesn't have to pay taxes because his salary is " . $this->salary . "€" . "\n";
        }
    }
}

$employee1 = new Employee("Joan", 5000);
$employee2 = new Employee("Maria", 7000);

$employee1->hasToPayTaxes();
$employee2->hasToPayTaxes();


// Exercici 2: POO Bàsic
echo "--- Exercici 2 --- \n";

class Shape
{
    public $height;
    public $width;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class Triangle extends Shape
{
    private $name = "triangle";

    function area()
    {
        echo "The area of this " . $this->name . " is: " . ($this->height * $this->width) / 2 .  "\n";
    }
}


class Rectangle extends Shape
{
    private $name = "rectangle";

    function area()
    {
        echo "The area of this " . $this->name . " is: " . ($this->height * $this->width) . "\n";
    }
}

$triangle = new Triangle(2, 3);
$triangle->area();
$rectangle = new Rectangle(2, 3);
$rectangle->area();