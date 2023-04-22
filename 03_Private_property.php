<?php

class User {

    private $firstName;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName(){
       echo $this->firstName;
    }

}


$user1 = new User();

$user1->setFirstName("Joe");

$user1->getFirstName();


class Product {

    private $furniture;

    public function setFurniture($str) {
        $this->furniture = $str;
    }

    public function getFurniture() {
        echo $this->furniture;
    }


}


$buy1 = new Product();


$buy1->setFurniture("Chair");

echo $buy1->getFurniture();


?>