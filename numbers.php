<?php

//? NUMBERS

$radius = 25;
$pi = 3.14;

// basic - *, /, +, -, **

echo $pi * $radius ** 2;

//* order of operation ( B I D M A S )

echo 2 * (4 + 9) / 3;

//? increment and decrement

$radius++;
echo $radius;

$radius--;
echo $radius;

//? shorthand operators;

$age = 20;

// $age -= 10;
$age *= 2;
echo $age;

// echo floor($pi);
// echo ceil($pi);
echo pi();