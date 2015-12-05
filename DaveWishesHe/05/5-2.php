<?php
$strings = array_filter(explode("\n",file_get_contents("5.input")));
$nice = 0;
foreach ($strings as $string) {
    if (preg_match_all("/(\w)[a-z]\\1{1}/", $string) > 0 && preg_match_all("/(\w\w).*\\1/", $string, $pairs) > 0) {
        $nice++;
    }
}

echo $nice . "\n";
