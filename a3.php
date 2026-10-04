<?php

class Student
{
    public $name;
    public $surname;
    public $country;

    private $tuition = 50000;
    protected $indexNumber = 101;

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function helloWorld()
    {
        return "Hello World";
    }

    protected function helloFamily()
    {
        return "Hello Family";
    }

    private function helloMe()
    {
        return "Me hello!";
    }

    private function getTuition()
    {
        echo "Tuition: " . $this->tuition . "<br>";
    }

    public function showPrivateMethods()
    {
        echo $this->helloMe() . "<br>";
        $this->getTuition();
    }
}

class PartTimeStudent extends Student
{
    public function helloParent()
    {
        echo $this->helloFamily() . "<br>";
    }
}

$student = new Student();

$student->name = "Anisha";
$student->surname = "Kunwar";
$student->country = "Nepal";

echo "Name: " . $student->getName() . "<br>";
echo "Surname: " . $student->getSurname() . "<br>";
echo $student->helloWorld() . "<br>";
$student->showPrivateMethods();

echo "<br>";

$partTime = new PartTimeStudent();

$partTime->name = "Ram";
$partTime->surname = "Sharma";
$partTime->country = "Nepal";

echo "Name: " . $partTime->getName() . "<br>";
echo "Surname: " . $partTime->getSurname() . "<br>";
echo $partTime->helloWorld() . "<br>";
$partTime->helloParent();

?>