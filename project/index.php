<?php

// MySQLi - MySQL Improved
// PDO - PHP Data Objects

//? Connect to database via MySQLi
$connection = mysqli_connect("localhost", "root", "", "pizzas");

//? Check connection
if (!$connection) {
    echo "Connection error: " . mysqli_connect_error();
}

//? write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//? make query and get result
$result = mysqli_query($connection, $sql);

//? fetching resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//? free memory
mysqli_free_result($result);

//? close connection
mysqli_close($connection);

print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">


<?php include("templates/header.php"); ?>


<?php include("templates/footer.php"); ?>


</html>