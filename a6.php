<?php

class User
{
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function fullName()
    {
        $name = $this->name . " " . $this->surname;

        if ($this->is_admin) {
            $name .= " (admin)";
        }

        return $name;
    }
}

class Customer extends User
{
    private $city;
    private $state;
    private $country;

    public function __construct(
        $name,
        $surname,
        $username,
        $city,
        $state,
        $country
    ) {
        parent::__construct($name, $surname, $username);

        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function location()
    {
        return $this->city . ", " .
               $this->state . ", " .
               $this->country;
    }
}

class AdminUser extends User
{
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);

        $this->is_admin = true;
    }
}

$user = new User("Ram", "Sharma", "ram123");

$customer = new Customer(
    "Sita",
    "Thapa",
    "sita123",
    "Pokhara",
    "Gandaki",
    "Nepal"
);

$admin = new AdminUser(
    "Anisha",
    "Kunwar",
    "admin123"
);

echo $user->fullName() . "<br>";
echo "is_admin: " . ($user->isAdmin() ? "true" : "false") . "<br><br>";

echo $customer->fullName() . "<br>";
echo "is_admin: " . ($customer->isAdmin() ? "true" : "false") . "<br>";
echo "Location: " . $customer->location() . "<br><br>";

echo $admin->fullName() . "<br>";
echo "is_admin: " . ($admin->isAdmin() ? "true" : "false");

?>