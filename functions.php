<?php

function sayHello($name = "Mike")
{
    echo "The person's name is $name";
}

// sayHello("James");

function formatProduct($product)
{
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}

$productInfo = formatProduct(["name" => "product1", "price" => 30]);
echo $productInfo;