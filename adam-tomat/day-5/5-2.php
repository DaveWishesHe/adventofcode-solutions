<?php

$input = file_get_contents('input.txt');
$input = array_filter(explode(PHP_EOL, $input));

$nice = [];

foreach ($input as $word) {
    $totalRepeatingDoubleChars = preg_match_all('@(..)(.*){1}\1@', $word, $repeatingDoubleChars);
    $passRepeatingDoubleChars = ($totalRepeatingDoubleChars > 0);

    $totalDoubleChars = preg_match_all('@([a-z])([a-z]){1}\1@', $word, $doubleChars);
    $passDoubleChars = ($totalDoubleChars > 0);

    if ($passRepeatingDoubleChars && $passDoubleChars) {
        $nice[] = $word;
    }
}

echo 'Nice: '.count($nice);
