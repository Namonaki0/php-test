//? STRINGS
$stringOne = 'My email is ';
$stringTwo = 'josh@localhost.com';

//? single quotes output strings - double quotes enable us to add variables to strings

//? scape characters
$shout = "He fell and shouted \"OUCH\"";
$shout2 = 'He fell and shouted "OUCH"';
$str = 'cat';

//? character location
echo $stringOne[1];
//? string length
echo strlen($stringTwo);
//? to upper case
echo strtoupper($shout);
//? to lower case
echo strtolower($shout);
//? replace - args: 1) what char is being replaced, 2) what to replace it with, 3) what string it's happening on
echo str_replace("c", "m", $str);