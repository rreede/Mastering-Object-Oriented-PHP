<?php

// Created a class

class Car {

    // Created properties

    public $comp; 
    public $color = "beige"; // Property with default value
    public $hasSunRoof = true;

    public function hello() {
        return "beep";
    }



}

// Created object from the Car class

$bmw = new Car();
$mercedes = new Car();
$audi = new Car();

// Access properties

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


// Practise

class User {
    public $firstName;
    public $lastName;

    public function hello($firstName, $lastName) {
        echo "Hello" . $firstName . $lastName;
    }

}

$user1 = new User();
$user2 = new User();


$user1->hello("Rene", "Renx");

$user2->hello("Janet","Wood");

?>