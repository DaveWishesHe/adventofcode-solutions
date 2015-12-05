<?php
$strings = array_filter(explode("\n",file_get_contents("5.input")));
$nice = 0;
$naughty = 0;
foreach ($strings as $string) {
    if (preg_match("/(ab|cd|pq|xy)/", $string)) {
        $naughty++;
    } else {
        if (preg_match_all("/[aeiou]/", $string) >= 3 && preg_match("/(\w)\\1{1}/", $string)) {
            $nice++;
        } else {
            $naughty++;
        }
    }
}

echo $nice . "\n";
