<?php

$numbers = readline("Enter a number: ");
$negativ = false;
$numbers = intval($numbers);
if($numbers < 0){
    $numbers = $numbers * -1;
    $negativ = true;
}

$sum = 0;
while($numbers > 0){
    $digit = $numbers % 10;
    $sum+=$digit;
    $numbers = intval($numbers / 10);
}

echo $negativ ? $sum *-1 : $sum;


