<?php
$contents = str_replace("turn ", "", file_get_contents("6.input"));
$instructions = array_filter(explode("\n",$contents));

$row = "";
while (strlen($row) < 1000) {
    $row .= "0";
}

$grid = array_pad(array(), 1000, $row);

foreach ($instructions as $instruction) {
    list($state, $from, $through, $to) = explode(" ", $instruction);
    list($from_x, $from_y) = explode(",", $from);
    list($to_x, $to_y) = explode(",", $to);

    foreach ($grid as $y => $row) {
        if ($y < $from_y) {
            continue;
        }

        $i = $from_x;
        while ($i <= $to_x) {
            if ($state == "on" || $state == "off") {
                $row[$i] = ($state == "on" ? "1" : "0");
            } else {
                $row[$i] = ($row[$i] == "0") ? "1" : "0";
            }
            $i++;
        }
        $grid[$y] = $row;

        if ($y >= $to_y) {
            break;
        }
    }
}

echo substr_count(implode("\n", $grid), "1") . "\n";

