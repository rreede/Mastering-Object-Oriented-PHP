<?php

// Created a class

class Car {

    // Created properties

    public $comp; 
    public $color = "beige"; // Property with default value
    public $hasSunRoof = true;

    public function hello() {
        return "beep I am a " . $this->comp . "and i am " . $this->color;
    }



}

// Created object from the Car class

$bmw = new Car();
$mercedes = new Car();
$audi = new Car();

// Access properties

$bmw->color = "red";
echo $bmw->color;
echo $audi->hasSunRoof;

// Set object property

$bmw->comp = "BMW";

echo $bmw->comp;



// Displaying Methods

$car1 = new Car();
$car2 = new Car();

echo $car1->hello();
echo $car2->hello();
echo $bmw-> hello();

// Practise

class User {
    public $firstName;
    public $lastName;

    public function hello() {
        echo "Hello" . $this->firstName . $this->lastName;
    }

}



$user1 = new User();
$user2 = new User();
$user3 = new User();

$user3->firstName = "Jonnie";
$user3->lastName = "Roe";

$user3->hello();


$user1->hello("Rene", "Renx");

$user2->hello("Janet","Wood");

class Movie {

public $action;
public $romance;
public $comedy;

    public function type($value) {
        echo "$value";
    }


}


$example = new Movie();

$example->romance = true;

echo $example-> romance;

// Practise $this




?>