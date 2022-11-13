<?php

// MySQLi - MySQL Improved
// PDO - PHP Data Objects

//? Connect to database via MySQLi
$connection = mysqli_connect("localhost:3307", "root", "", "pizzas");

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

// print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">


<?php include("templates/header.php"); ?>

<h3 class="center grey-text">Pizza order</h3>

<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) { ?>
        <div class="col s6 sm3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
                    <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                </div>
                <div class="card-action right-align">
                    <a href="#" class="brand-text">more info</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>

<?php include("templates/footer.php"); ?>


</html>