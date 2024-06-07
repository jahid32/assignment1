<?php

$string = readline("Enter a Sentance:  ");
$string = explode(' ', $string);
foreach ($string as $key => $word) {
   $string[$key] = strrev($word);
}
echo implode(' ', $string);