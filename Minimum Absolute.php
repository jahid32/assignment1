<?php

$numbers = readline("Enter a series of integer seperate by space: ");
$numbers = explode(' ', $numbers);
$absoluteValues = array_map(fn($number) => $number < 0 ? $number * -1 : $number, $numbers);
echo "Minimum Absolute Value is : " . min($absoluteValues);