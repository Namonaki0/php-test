<?php

//? conditional statements

// $price = 10;

// if($price < 5) {
//     echo "Item is less than 5";
// } elseif($price > 5) {
//     echo "Item is higher than 5";
// } else {
//     echo "Item is not available";
// }

$blogs = [
    ['title' => 'title1', 'author' => 'author1', 'content' => 'lorem', 'likes' => 20],
    ['title' => 'title2', 'author' => 'author2', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'title3', 'author' => 'author3', 'content' => 'lorem', 'likes' => 45],
    ['title' => 'title4', 'author' => 'author4', 'content' => 'lorem', 'likes' => 60],
];


// foreach ($blogs as $blog) {
//     if ($blog["likes"] > 40) {
//         echo $blog["title"] . "<br />";
//     }
// }

//? AND
// foreach ($blogs as $blog) {
//     if ($blog["likes"] > 35 && $blog["likes"] < 50) {
//         echo $blog["title"];
//     }
// }

//? OR 
// foreach ($blogs as $blog) {
//     if ($blog["likes"] > 40 || $blog["likes"] < 30) {
//         echo $blog["title"] . "<br />";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional statements</title>
</head>

<body>
    <ul>
        <?php foreach ($blogs as $blog) { ?>
        <?php if ($blog["likes"] > 40) { ?>
        <li><?php echo $blog["title"] ?></li>
        <?php } ?>
        <?php } ?>
    </ul>
</body>

</html>