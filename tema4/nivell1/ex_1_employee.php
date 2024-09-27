<?php

// Exercici 1: POO Bàsic: Employee.
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
