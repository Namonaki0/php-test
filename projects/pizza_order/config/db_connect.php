<?php

//? Connect to database via MySQLi
$connection = mysqli_connect("localhost:3307", "root", "", "pizzas");

//? Check connection
if (!$connection) {
    echo "Connection error: " . mysqli_connect_error();
}