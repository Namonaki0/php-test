<?php

//? CLASSES

class User
{
    public $name;
    public $email;


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . " is logged in" . "<br />";
    }
}

$user1 = new User('Michael', 'michael@test.com');
$user1->login();