<?php
$input = file_get_contents("2-1.input");
$lines = array_filter(explode("\n", $input));
$sq_ft = 0;
foreach ($lines as $line) {
    $dimensions = explode("x", $line);
    $measurements = array(
        2 * $dimensions[0] * $dimensions[1],
        2 * $dimensions[1] * $dimensions[2],
        2 * $dimensions[2] * $dimensions[0]
    );
    sort($dimensions);
    $sq_ft += array_sum($measurements) + ($dimensions[0] * $dimensions[1]);
}
echo $sq_ft . "\n";
