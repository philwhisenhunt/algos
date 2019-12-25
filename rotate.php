<?php

//take the string
//split it into an array

$theString = "MyString";
$input = 2;
$nowArray = str_split($theString);
print_r($nowArray);
//skip the number of the input
//take each character and add it to a new array
$sliced = array_slice($nowArray, $input);
print_r($sliced);

$firstPart = array_slice($nowArray, 0, $input);
print_r($firstPart);
//find the beginning of the input up to the input and add those characters
//smash it back into a string
$finalArray = array_merge($sliced, $firstPart);
print_r($finalArray);

