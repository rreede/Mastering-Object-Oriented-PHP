<?php

class Car {
    public $tank;

    // Add gallons of fuel to the tank when we fill it
    public function fill($float) {
        $this->tank += $float;


        return $this;
    }


    // Substract gallons of fuel from the tank as we ride the car
    public function ride($float) {
        $miles = $float;
        $gallons = $miles/50;
        $this->tank -= $gallons;

        return $this;
    }

}

// Create an object from the Car class
$bmw = new Car();

$tank = $bmw->fill(10)->ride(40)->tank;

echo "The number of gallons left in the tank:" . $tank . "gal";


// Practice

class User {
    public $firstName;

    public function hello() {
        echo "hello," . $this->firstName;
        return $this;
    }

    public function register() {
        echo "Registered";
        return $this;
    }

    public function mail() {
        echo "E-mail sent!";
    }

}

$user1 = new User();

$user1->firstName = "Jane";

$user1-> hello()->register()->mail();



?>