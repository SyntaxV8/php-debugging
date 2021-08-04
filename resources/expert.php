<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise {$x} starts here:<br/>";
    echo $block;
}

new_exercise(1);

new_exercise(2);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);

foreach ($week as $i => $day) {
    $week[$i] = substr($day, 0, -3);
}

print_r($week);

new_exercise(5);

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    if ($letter == "aa") {
        break;
    }
    array_push($arr, $letter);
}

print_r($arr);

new_exercise(6);

// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are randomly combined as seen in the code, fix all the bugs whilst keeping the functionality!
// Examples: captain strange, ant widow, iron man, ...
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $i => &$param) {
        if ($param == "") {
            $param = randomHeroName($i);
        }
    }
    return implode(" - ", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName($listIndex)
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randomElementIndex = rand(0, 10);
    $namesList = $heroes[$listIndex];
    $randname = $namesList[$randomElementIndex];

    return $randname;
}

echo "Here is the name: " . combineNames();




