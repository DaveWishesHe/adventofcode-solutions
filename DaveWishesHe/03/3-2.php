<?php
$input = trim(file_get_contents("3.input"));
$directions = array_filter(str_split($input));
$lat = 0;
$lng = 0;
$houses = array($lat . "," . $lng => 2);

$deliverers = array(
    "santa" => array("lat" => 0, "lng" => 0),
    "robo-santa" => array("lat" => 0, "lng" => 0)
);

foreach ($directions as $key => $direction) {

    $deliverer = ($key % 2) ? "santa" : "robo-santa";

    switch ($direction) {
        case ">";
            $deliverers[$deliverer]["lat"]++;
            break;
        case "<":
            $deliverers[$deliverer]["lat"]--;
            break;
        case "^":
            $deliverers[$deliverer]["lng"]++;
            break;
        case "v":
            $deliverers[$deliverer]["lng"]--;
            break;
    }
    $house = $deliverers[$deliverer]["lat"] . "," . $deliverers[$deliverer]["lng"];
    if (!isset($houses[$house])) {
        $houses[$house] = 1;
    } else {
        $houses[$house]++;
    }
}
echo count($houses) . "\n";
