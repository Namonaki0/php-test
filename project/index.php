<?php

// MySQLi - MySQL Improved
// PDO - PHP Data Objects

//? Connect to database via MySQLi
$connection = mysqli_connect("localhost", "root", "4mfMxYaFvDV83ay", "pizza_order");

//? Check connection
if (!$connection) {
    echo "Connection error: " . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">


<?php include("templates/header.php"); ?>


<?php include("templates/footer.php"); ?>


</html>