<?php
// Exercici 2: PHP Avançat: Traits.
echo "--- Exercici 2 --- \n";

enum Brand: string
{
    case BMW = "BMW";
    case Audi = "Audi";
    case Mercedes = "Mercedes";
    case Ford = "Ford";
    case Seat = "Seat";
}

enum FuelType: string
{
    case Gasoline = "Gasolina";
    case Diesel = "Dièsel";
    case Electric = "Elèctric";
    case Hybrid = "Híbrid";
}

class Car
{
    public Brand $brand;
    public $maxSpeed;
    public $licensePlate;
    public FuelType $fuelType;
    use Turbo;

    public function __construct($brand, $maxSpeed, $licensePlate, $fuelType)
    {
        $this->brand = $brand;
        $this->maxSpeed = $maxSpeed;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
    }

    public function getCar()
    {
        $printBrand = $this->brand->value;
        $printFuelType = $this->fuelType->value;
        return "La marca del cotxe és $printBrand, la seva velocitat màxima és $this->maxSpeed km/h, la seva matrícula és $this->licensePlate i funciona amb $printFuelType. \n";
    }
}

trait Turbo
{
    public function boost()
    {
        return "S'ha iniciat el turbo. \n";
    }
}

$car = new Car(Brand::Audi, 250, '1234ABC', FuelType::Gasoline);
echo $car->getCar();
echo $car->boost();
