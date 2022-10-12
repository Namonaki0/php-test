<?php

$name = "James";

function sayHello()
{
    global $name; // James

    $name = "Mike";
    echo "hello $name"; // hello Mike
}

sayHello();

echo $name; // Mike


function sayBye($name)
{
    $name = "Steve";
    echo "bye $name"; // bye Steve
}

sayBye($name);
echo $name;