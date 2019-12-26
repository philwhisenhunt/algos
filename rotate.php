<?php

//take the string and the input

$theString = "MyString";
$input = 2;
//split it into an array
$nowArray = str_split($theString);

//slice the part that comes after the input position
$sliced = array_slice($nowArray, $input);

//grab the first part up to the input
$firstPart = array_slice($nowArray, 0, $input);

//smash the two together
$finalArray = array_merge($sliced, $firstPart);
print_r($finalArray);

