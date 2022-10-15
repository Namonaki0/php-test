<?php

$email = $title = $ingredients = "";
$errors = ["email" => "", "title" => "", "ingredients" => ""];

//? isset checks if any data has been sent via the $_POST method
//? $_POST array - global array in PHP
//? $_ globals
if (isset($_POST["submit"])) {

    // checks for email
    if (empty($_POST["email"])) {
        $errors["email"] = "An email is required <br />";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "must enter a valid email";
        }
        // echo htmlspecialchars($_POST["email"]) . "<br />";
    }

    // checks for title
    if (empty($_POST["title"])) {
        $errors["title"] = "A title is required <br />";
    } else {
        $title = $_POST["title"];
        if (!preg_match("/^[a-zA-Z\s]+$/", $title)) {
            $errors["title"] = "title must contain letters and spaces only";
        }
        // echo htmlspecialchars($_POST["title"]) . "<br />";
    }

    // checks for ingredients
    if (empty($_POST["ingredients"])) {
        $errors["ingredients"] = "At least one ingredient is required <br />";
    } else {
        $ingredients = $_POST["ingredients"];
        if (!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/", $ingredients)) {
            $errors["ingredients"] = "ingredients must be a comma separated list";
        }
        // echo htmlspecialchars($_POST["ingredients"]) . "<br />";
    }

    //? htmlspecialchars - safe string version codes for special characters
    //? converts things like angle brackets into HTML entities
    //? when they get to the browser they'll be rendered as HTML entities
    //? code will not execute as JS - XSS prevention

    //* re-direct user to homepage if below statement is false
    if (array_filter($errors)) {
        // errors will display
    } else {
        header("Location: ../index.php");
    }
} // end of POST check

?>


<!DOCTYPE html>
<html lang="en">


<?php require("../templates/header.php"); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" class="white" action="add.php" method="POST">
        <div>
            <label for="email">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" />
        </div>
        <div class="red-text"><?php echo $errors["email"] ?></div>
        <div>
            <label for="title">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>" />
        </div>
        <div class="red-text"><?php echo $errors["title"] ?></div>
        <div>
            <label for="ingredients">Ingredients (comma separated)</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" />
        </div>
        <div class="red-text"><?php echo $errors["ingredients"] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php require("../templates/footer.php"); ?>


</html>