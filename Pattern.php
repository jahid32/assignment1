<?php

$numbers = readline("Enter a number: ");
$numbers = intval($numbers);
if($numbers < 0){
    $numbers = $numbers * -1;
}
$totalStar = $numbers * 2 -1;
for($i=0; $i<$numbers; $i++){
    $step =  1+$i*2;
    $blankspace = ($totalStar - $step) / 2;
    echo str_repeat(' ', $blankspace) . str_repeat('*', $step) . str_repeat(' ', $blankspace) . PHP_EOL;
}