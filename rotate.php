<?php

//set the string and the input
$theString = "MyString";
$input = 2;

//split it into an array
$nowArray = str_split($theString);

//create a negative version of the input in order to slice from the end
$negativeInput = $input * -1;

//slice the last two letters
$sliced = array_slice($nowArray, $negativeInput);

//grab the first section
$remainder = array_slice($nowArray, 0, $negativeInput);

//make a new array with the two combined in the new order
$combinedArray = array_merge($sliced, $remainder);

//convert the new array to a string
$stringAgain = implode("", $combinedArray);

//echo it out
echo $stringAgain . "\n";
