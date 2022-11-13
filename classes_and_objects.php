<?php

//? CLASSES

class User
{
    private $name;
    private $email;


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . " is logged in" . "<br />";
    }

    public function getName()
    {
        $this->name;
    }

    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return "name not valid";
        }
    }
}

$user1 = new User('Michael', 'michael@test.com');
// $user1->login();

echo $user1->setName("Jeff");
echo $user1->getName();