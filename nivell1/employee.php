<?php

// Exercici 1: POO Bàsic
echo "--- Exercici 1 --- \n";

class Employee
{
    public string $name;
    public int $salary;

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
    public float $height;
    public float $width;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
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