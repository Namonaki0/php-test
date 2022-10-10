<?php
//? LOOPS 

$names = ["Mark", "Steve", "Marie", "Julie"];

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i] . "<br />";
}

//? for each 

$products = [
  ["name" => "product1", "price" => 30],
  ["name" => "product2", "price" => 10],
  ["name" => "product3", "price" => 25],
  ["name" => "product4", "price" => 50],
  ["name" => "product5", "price" => 45],
];

foreach ($names as $name) {
  echo $name . "<br />";
}

foreach ($products as $product) {
  echo
  $product["name"] . " - " . "£" . $product["price"] . "<br />";
};

//? while loop

$i = 0;

while ($i < count($products)) {
  echo $products[$i]["name"] . "<br />";
  $i++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP file</title>
</head>

<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
        <h3><?php echo $product["name"]; ?></h3>
        <p>£ <?php echo $product["price"]; ?></p>
        <?php } ?>
    </ul>
</body>

</html>