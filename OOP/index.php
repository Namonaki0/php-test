<?php

class User
{
    public $username;
    // access modifier
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addCredential()
    {
        return "$this->username added a new credential";
    }
}

$userOne = new User('James', 'james@email.com');
$userTwo = new User('Steve', 'steve@email.com');

echo 'the class belongs to ' . get_class($userOne) . '<br>';
echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addCredential() . '<br>';

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';
echo $userTwo->addCredential() . '<br>';

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