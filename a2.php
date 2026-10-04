<?php

class Bicycle
{
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight;

    public function getInfo()
    {
        return "$this->brand $this->model ($this->year)";
    }

    public function getWeight($kilograms = false)
    {
        if ($kilograms) {
            return $this->weight / 1000 . " kg";
        }

        return $this->weight . " grams";
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}

$bike1 = new Bicycle();

$bike1->brand = "Giant";
$bike1->model = "Escape 3";
$bike1->year = 2023;
$bike1->description = "Mountain bicycle";
$bike1->setWeight(12000);

$bike2 = new Bicycle();

$bike2->brand = "Trek";
$bike2->model = "Marlin 5";
$bike2->year = 2024;
$bike2->description = "Sports bicycle";
$bike2->setWeight(13500);

echo $bike1->getInfo() . "<br>";
echo "Description: " . $bike1->description . "<br>";
echo "Weight: " . $bike1->getWeight(true) . "<br><br>";

echo $bike2->getInfo() . "<br>";
echo "Description: " . $bike2->description . "<br>";
echo "Weight: " . $bike2->getWeight(true) . "<br>";

?>