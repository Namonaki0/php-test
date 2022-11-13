<?php

// MySQLi - MySQL Improved
// PDO - PHP Data Objects

//? Connect to database via MySQLi
$connection = mysqli_connect("localhost", "root", "", "pizzas");

//? Check connection
if (!$connection) {
    echo "Connection error: " . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">


<?php include("project/templates/header.php"); ?>

<?php include("project/templates/footer.php"); ?>


</html>