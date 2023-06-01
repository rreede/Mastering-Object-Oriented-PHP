<?php

// __ constructor
/*
class Car {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getCarModel() {
       return $this->model;
    }

}

$car1 = new Car("Mercedes");

echo $car1-> getCarModel();
*/
// Test

class User {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

   public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }


}

$user1 = new User("Rene","Reede");

echo $user1->getFullName();


?>