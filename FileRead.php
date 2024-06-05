<?php

$content = file_get_contents(dirname(__FILE__ ) . '/demo.txt');
$wordCount = str_word_count($content);
echo "Number of Words in file : " . $wordCount;
