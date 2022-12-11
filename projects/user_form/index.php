<?php
if (isset($_POST['submit'])) {
    echo 'form submitted';
}
echo '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User form</title>
</head>

<body>

    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" autocomplete="off">

            <label for="email">Email:</label>
            <input type="email" name="email" autocomplete="off">

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>