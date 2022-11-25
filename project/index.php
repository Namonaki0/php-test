<?php

// MySQLi - MySQL Improved
// PDO - PHP Data Objects

include("config/db_connect.php");

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
        <?php foreach ($pizzas as $pizza) : ?>
        <div class="col s6 sm3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
                    <ul>
                        <?php foreach (explode(',', $pizza['ingredients']) as $ingredient) : ?>
                        <li><?php echo htmlspecialchars($ingredient) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-action right-align">
                    <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- old syntax -->
        <?php if (count($pizzas) >= 2) { ?>
        <p>there are 2 or more pizzas</p>
        <?php } else { ?>
        <p>there are less than 2 pizzas</p>
        <?php } ?>

        <!-- new syntax -->
        <?php if (count($pizzas) >= 2) : ?>
        <p>there are 2 or more pizzas</p>
        <?php else : ?>
        <p>there are less than 2 pizzas</p>
        <?php endif; ?>

    </div>

</div>

<?php include("templates/footer.php"); ?>


</html>