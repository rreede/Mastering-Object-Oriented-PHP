<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

<?php

class User {

    // Properties and methods
    private $username;
    protected $email;
    public $role = "member";

    public function __construct($username, $email)
    {
        $this->username = $username; 
        $this->email = $email;
    } 

   public function addFriend() {
        return "$this->email Added a friend!";
    }

    public function message() {
        return "$this->email sent a new message";
    }

    // Getters

    public function getEmail() {
        return $this->email;
    }

    // Setters

    public function setEmail($email) {
        if(strpos($email,"@") > -1) {
            $this->email = $email;
        }

    }

}

class Admin extends User {

    public $level;
    public $role = "admin";



    public function __contruct($username,$email,$level) {
        $this->level = $level;
        parent::__construct($username,$email);
    }

    public function message() {
        return "$this->email, an admin, sent a new message";
    }

}

$userOne = new User("Mario","Mario@mario.com");
$userTwo = new User("Luigi","Luigi@mario.com");
$userThree = new Admin("Markus","markus@gmail.com");
$userFour = new User("Candy@gmail.com","Juhan");

echo $userOne->setEmail("rene@gmail.com");

echo $userOne->getEmail()."<br>";
echo $userTwo->getEmail()."<br>";
echo $userThree->getEmail();

echo $userOne->role.'<br>';
echo $userThree->role;

echo $users;



// $userOne->email = 3;

// echo $userOne->email;
// echo $userTwo->email;


echo $userOne->addFriend("rene","reede");



echo $userOne->message();

echo $userTwo->message();

echo $userThree->message();

 //echo get_class($userOne); What class does this object belong to?

 // print_r (get_class_vars)('User'); Get all class variables

?>



</body>
</html>

