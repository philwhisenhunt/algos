<?php
//take an array and a second array, then merge the two, alternating between the two.

$array1 = [1,2,3,4,5];
$array2 = [9,9,9,9,9];
$newArray = [];

//for each item in array1
//add it to the new array
//add a piece of array2

//might need a for loop instead,
for($i = 0; $i< count($array1); $i++){
    //echo $array1[$i];
    $newArray[] = $array1[$i];
    $newArray[] = $array2[$i];

}

print_r($newArray);