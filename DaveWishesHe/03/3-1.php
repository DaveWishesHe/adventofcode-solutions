<?php
$input = trim(file_get_contents("3.input"));
$directions = array_filter(str_split($input));
$lat = 0;
$lng = 0;
$houses = array($lat . "," . $lng => 1);
foreach ($directions as $direction) {
    switch ($direction) {
        case ">";
            $lat++;
            break;
        case "<":
            $lat--;
            break;
        case "^":
            $lng++;
            break;
        case "v":
            $lng--;
            break;
    }
    $house = $lat . "," . $lng;
    if (!isset($houses[$house])) {
        $houses[$house] = 1;
    } else {
        $houses[$house]++;
    }
}
echo count($houses) . "\n";
