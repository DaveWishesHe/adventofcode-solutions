<?php
$strings = explode("\n", file_get_contents("8.input"));

$string_code = 0;
$memory = 0;

foreach ($strings as $string) {
    $string_code += strlen($string);
    $string = substr($string, 1, -1);
    $string = str_replace(array('\\\\', '\\"'), array('\\', '"'), $string);
    $string = preg_replace('/(\\\[x]{1}[0-9a-fA-F]{2})/', "-", $string);
    $memory += strlen($string);
}

echo $string_code - $memory . "\n";
