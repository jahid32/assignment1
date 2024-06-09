<?php

$santence = readline("Enter a  Sentance: ");
$santence = explode(' ', $santence);

foreach($santence as $key => $word){
    $santence[$key] = strrev($word);
}

echo implode(' ', $santence);