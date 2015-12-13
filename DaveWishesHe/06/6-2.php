<?php
$contents = str_replace("turn ", "", file_get_contents("6.input"));
$instructions = array_filter(explode("\n",$contents));

$row = array();
while (count($row) < 1000) {
    $row[] = 0;
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
            $row[$i] = (int)$row[$i];
            if ($state == "on") {
                $row[$i] = $row[$i] + 1;
            } elseif ($state == "off" && $row[$i] > 0) {
                $row[$i] = $row[$i] - 1;
            } elseif ($state == "toggle") {
                $row[$i] = $row[$i] + 2;
            }
            $i++;
        }
        $grid[$y] = $row;

        if ($y >= $to_y) {
            break;
        }
    }
}

$brightness = 0;

foreach ($grid as $row) {
    $brightness += array_sum($row);
}

echo $brightness . "\n";

