<?php

//? ternary operators

$score = 40;

$val = $score > 20 ? "yes" : "no";
echo $val . "<br />";


//? superglobals

echo $_SERVER['SERVER_NAME'] . "<br />";
echo $_SERVER['REQUEST_METHOD'] . "<br />";
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
echo $_SERVER['PHP_SELF'] . "<br />";


//? sessions

if (isset($_POST['submit'])) {

    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox</title>
</head>

<body>

    <p><?php echo $score > 50 ? "yes" : "no"; ?></p>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name" />
        <input type="submit" name="submit" value="submit" />
    </form>

</body>

</html>