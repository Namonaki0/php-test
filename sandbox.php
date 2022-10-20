<?php

// ternary operators

$score = 40;

// if ($score > 30) {
//     echo "yes";
// } else {
//     echo "no";
// }

$val = $score > 20 ? "yes" : "no";

echo $val;

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

</body>

</html>