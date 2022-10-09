//? INDEXED ARRAYS

$peopleOne = ["Mark", "Steve", "Julie"];
echo $peopleOne[2];

$peopleTwo = array("Roger", "Clarence", "Jupiter");
echo $peopleTwo[1];

//? merging arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree); --> //? Array ( [0] => Mark [1] => Steve [2] => Julie [3] => Roger [4] => Clarence [5] => Jupiter
)

//? print readable
$ages = [30, 12, 42, 25];
print_r($ages); --> //? Array ( [0] => 30 [1] => 12 [2] => 42 [3] => 25 )

//? override value in array
$ages[1] = 25;
print_r($ages); --> //? Array ( [0] => 30 [1] => 25 [2] => 42 [3] => 25 )

//? adding a value
$ages[] = 60;
print_r($ages)

array_push($ages, 70);
print_r($ages); --> //? Array ( [0] => 30 [1] => 25 [2] => 42 [3] => 25 [4] => 60 [5] => 70 )

echo count($ages); --> //? 6

//? ASSOCIATIVE ARRAYS

$arrayOne = ["Mark" => "Orange", "Julie" => "white", "John" => "red"];
echo $arrayOne["Julie"]; --> //? white
print_r($arrayOne); --> //? Array ( [Mark] => Orange [Julie] => white [John] => red )

$arrayTwo = array("Jacob" => "purple", "Rose" => "pink");
$arrayTwo["Jeff"] = "silver";
print_r($arrayTwo); --> //? Array ( [Jacob] => purple [Rose] => pink [Jeff] => silver )

//? override values
$arrayTwo["Jacob"] = "gold";
print_r($arrayTwo); --> //? Array ( [Jacob] => gold [Rose] => pink [Jeff] => silver )

//? merging arrays
$arrayThree = array_merge($arrayOne, $arrayTwo);
print_r($arrayThree) --> //? Array ( [Jacob] => purple [Rose] => pink [Jeff] => silver ) Array ( [Mark] => Orange
//? [Julie] => white [John] => red [Jacob] => purple [Rose] => pink [Jeff] => silver )