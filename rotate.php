<?php

//set the string and the input
$theString = "MyString";
$input = 2;

//split it into an array
$nowArray = str_split($theString);
$negativeInput = $input * -1;
echo $negativeInput;
die();






//slice the part that comes after the input position
$sliced = array_slice($nowArray, $input);

//grab the first part up to the input
$firstPart = array_slice($nowArray, 0, $input);

//combine the two together
$finalArray = array_merge($firstPart, $sliced);

//now convert it back into a string
$stringAgain = implode("", $finalArray);

//and print it out
echo $stringAgain . "\n";