<?php
$input = file_get_contents("2-1.input");
$lines = array_filter(explode("\n", $input));
$ribbon = 0;
foreach ($lines as $line) {
    $dimensions = explode("x", $line);
    sort($dimensions);
    $ribbon += $dimensions[0] + $dimensions[0] + $dimensions[1] + $dimensions[1];
    $ribbon += $dimensions[0] * $dimensions[1] * $dimensions[2];
}
echo $ribbon . "\n";
