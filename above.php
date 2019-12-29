<?php

//set the array and the input
$lister = [1, 5, 2, 1, 10];
$input = 6;

//initialize the variables and set them to zero
$countHigher = 0;
$countBelow = 0;

//scan through the array
foreach($lister as $item){

    //if the number is greater than $input, increase the count of numbers above the input
    if ($item > $input){
        $countHigher += 1;
    }

    //if the number is below $input, increase the count of numbers below the input
    if ($item < $input){
        $countBelow += 1;
    }

}

//print it out 
echo "\n" . "above: $countHigher" . ", below: $countBelow" . "\n";