<?php
/*
class Car {

    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;

    public function hello() {
        return "beep";
    }

}

$bmw = new Car();
$mercedes = new Car();


echo $bmw->color;


$bmw->color = "red";

echo $bmw->color;

$car1 = new Car();

echo $car1->hello();
/*

class User {
    public $firstName;
    public $lastName;

    public function helloUser() {
        return "Hello $this->firstName";
    }

    public function register() {
        echo "Registered";
        return $this;
    }

    public function mail() {
        echo "Email sent!";
        return $this;
    }

}

$user1 = new User();

$user1->firstName = "rene";

echo $user1->helloUser();

*/

/*

class Pet {

 public $typeof;
 private $price;
 public $weight; 

 public function describePet() {
    echo "The $this->typeof with the price of $this->price weights $this->weight KG.";
 }


public function setPrice($price) {
    $this->price = $price;
}

public function getPrice() {
    return $this->price;
}

}

$dog = new Pet();

$dog->typeof = "Labrador Dog";

$dog->describePet();

$dog->setPrice(20);

echo $dog->getPrice();

/*
class User {
    private $firstName;
    private $lastName;

    public function __construct($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

}

$user1 = new User("Reede");
$user1->setFirstName("Joe");
echo $user1->getFirstName();
echo $user1->getLastName();

*/

/*
class User {
    private $firstName;
    private $lastName;


    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;

        $this->lastName = $lastName;
    }

    public function getFullName() {
        echo "$this->firstName" . " " . "$this->lastName";
    }
}

$user1 = new User("Rene", "Reede");

$user1->getFullName();

*/
/*
class User {
    protected $username;

    public function setUserName($username) {
        $this->username = $username;
    }
}

class Admin extends User {

    public function expressYourRole() {
        echo "Admin";
    }

    public function sayHello() {
        echo "Hello" . __CLASS__ ."$this->username";
    }
}

$admin1 = new Admin();

$admin1->setUserName("Balthazar");

$admin1->sayHello();
*/
/*
abstract class Car {

    protected $tankVolume;

    abstract public function calcNumMilesOnFullTank();

}

*/

/*

abstract class User {

    protected $username;

    public function setUserName($username) {
        $this->username = $username;
    }

    public function getUserName() {
         return $this->username;
    }
    
    abstract function stateYourRole();
}


class Admin extends User {
    public function stateYourRole() {
        return __CLASS__;
    }
}

class Viewer extends User {

    public function stateYourRole() {
        return __CLASS__;
    }   

}

$admin1 = new Admin();

$admin1->setUserName("Balthazar");

echo $admin1->stateYourRole();
echo $admin1->getUserName();

*/

// Interfaces

class User {
    protected $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername($username) {
       return $this->username;
    }
}

interface Author {
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();

}

interface Editor {

    public function setEditorPrivileges($array);

    public function getEditorPrivileges();

}


class AuthorEditor extends User implements Author,Editor {

private $editorPrivilegesArray = array();
private $authorPrivilegesArray = array();


    public function setEditorPrivileges($array) {
        $this->editorPrivilegesArray = $array;
    }

    public function getEditorPrivileges() {
       return $this->editorPrivilegesArray;
    }


    public function setAuthorPrivileges($array) {
        $this->authorPrivilegesArray = $array;
    }

    public function getAuthorPrivileges() {
       return $this->authorPrivilegesArray;
    }


}


$user1 = new AuthorEditor();

$user1->setUserName("Balthazar");

$user1->setAuthorPrivileges(array("Write Text", "Add punctuation"));

$user1->setEditorPrivileges(array("Edit Text", "edit punctuation"));

$userName = $user1 -> getUsername("Balthazamar");
$userPrivileges = array_merge($user1 -> getAuthorPrivileges(),
$user1 -> getEditorPrivileges());
echo $userName . " has the following privileges: ";
foreach($userPrivileges as $privilege)
{
echo " {$privilege},";
}
echo ".";

?>