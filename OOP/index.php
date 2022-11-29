<?php

class User
{
    public $username;
    // access modifier
    private $email;
    public $role = 'member';

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addCredential()
    {
        return "$this->username added a new credential";
    }

    public function message()
    {
        return "$this->email sent a message";
    }

    // getters
    public function getEmail()
    {
        return $this->email;
    }

    // setters
    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class UserAdmin extends User
{

    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$userOne = new User('James', 'james@email.com');
$userTwo = new User('Steve', 'steve@email.com');
$userThree = new UserAdmin('Roger', 'roger@email.com', 'high');

echo $userThree->username . '<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level . '<br>';

echo $userThree->message() . '<br>';

// echo 'the class belongs to ' . get_class($userOne) . '<br>';
// echo $userOne->username . '<br>';
// echo $userOne->email . '<br>';
// echo $userOne->addCredential() . '<br>';

// echo $userTwo->username . '<br>';
// echo $userTwo->email . '<br>';
// echo $userTwo->addCredential() . '<br>';

// echo $userOne->getEmail() . '<br>';
// echo $userTwo->getEmail() . '<br>';

echo $userOne->setEmail('userone@test.com');

print_r(get_class_vars('User'));
print_r(get_class_methods('User'));

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>