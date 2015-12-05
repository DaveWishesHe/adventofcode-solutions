<?php

$input = file_get_contents('input.txt');
$input = array_filter(explode(PHP_EOL, $input));

$nice = [];

foreach ($input as $word) {
    $totalBadChars = preg_match_all('/ab|cd|pq|xy/', $word);
    $passBadChars = ($totalBadChars === 0);

    $totalVowels = preg_match_all('/[aeiou]/i', $word, $vowels);
    $passVowels = ($totalVowels >= 3);

    $totalDoubleChars = preg_match_all('@([a-z]{1})\1@i', $word, $doubleChars);
    $passDoubleChars = ($totalDoubleChars > 0);

    if ($passVowels && $passDoubleChars && $passBadChars) {
        $nice[] = $word;
    }
}

echo 'Nice: '.count($nice);
