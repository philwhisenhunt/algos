<?php
//scan through the array
//if the number is greater than $input, increase above
//if the number is below $input, increase below
//check for intergers too

//receive input

$lister = [1, 5, 2, 1, 10];
$input = 6;
$countHigher = 0;
$countBelow = 0;

foreach($lister as $item){
    if ($item > $input){
        $countHigher += 1;
    }
    if ($item < $input){
        $countBelow += 1;
    }

}