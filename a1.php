<?php

interface Vehicle
{
    public function startEngine();
    public function stopEngine();
}

class Car implements Vehicle
{
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function start()
    {
        echo "Car started.<br>";
    }

    public function startEngine()
    {
        echo "Engine started.<br>";
    }

    public function stopEngine()
    {
        echo "Engine stopped.<br>";
    }

    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getDescription()
    {
        return $this->make . " " . $this->model . " (" . $this->year . ")";
    }
}

class ElectricCar extends Car
{
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge()
    {
        echo "Electric car is charging.<br>";
    }

    public function getDescription()
    {
        return parent::getDescription() .
               " - Battery: " . $this->batteryCapacity . " kWh";
    }
}

$car = new Car("Toyota", "Corolla", 2024);

$car->start();
$car->startEngine();

echo "Make: " . $car->getMake() . "<br>";
echo "Model: " . $car->getModel() . "<br>";
echo "Year: " . $car->getYear() . "<br>";
echo "Description: " . $car->getDescription() . "<br>";

$car->stopEngine();

echo "<br>";

$electricCar = new ElectricCar("Tesla", "Model 3", 2025, 75);

echo $electricCar->getDescription() . "<br>";
$electricCar->charge();

?>