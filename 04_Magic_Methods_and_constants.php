<?php

// __ constructor

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

?>