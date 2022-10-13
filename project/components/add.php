<?php

//? isset checks if any data has been sent via the $_GET method
//? $_GET array - global array in PHP
//? $_ globals
if (isset($_POST["submit"])) {

    // checks for email
    if (empty($_POST["email"])) {
        echo "An email is required <br />";
    } else {
        echo htmlspecialchars($_POST["email"]) . "<br />";
    }

    // checks for title
    if (empty($_POST["title"])) {
        echo "A title is required <br />";
    } else {
        echo htmlspecialchars($_POST["title"]) . "<br />";
    }

    // checks for ingredients
    if (empty($_POST["ingredients"])) {
        echo "At least one ingredient is required <br />";
    } else {
        echo htmlspecialchars($_POST["ingredients"]) . "<br />";
    }

    //? htmlspecialchars - safe string version codes for special characters
    //? converts things like angle brackets into HTML entities
    //? when they get to the browser they'll be rendered as HTML entities
    //? code will not execute as JS - XSS prevention

} // end of POST check

?>


<!DOCTYPE html>
<html lang="en">


<?php require("../templates/header.php"); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" class="white" action="add.php" method="POST">
        <label for="email">Your Email:</label>
        <input type="email" name="email">
        <label for="title">Pizza Title:</label>
        <input type="text" name="title">
        <label for="ingredients">Ingredients (comma separated)</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php require("../templates/footer.php"); ?>


</html>