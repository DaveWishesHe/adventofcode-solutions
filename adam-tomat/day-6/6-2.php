<?php

ini_set('memory_limit', '1024M');

$input = array_filter(explode(PHP_EOL, file_get_contents('input.txt')));

$lights = [];

foreach ($input as $command) {
    $action = false;

    if (substr($command, 0, 7) === 'turn on') {
        $positions = explode(' through ', str_replace('turn on ', '', $command));
        $action = 'on';
    } elseif (substr($command, 0, 8) === 'turn off') {
        $positions = explode(' through ', str_replace('turn off ', '', $command));
        $action = 'off';
    } elseif (substr($command, 0, 6) === 'toggle') {
        $positions = explode(' through ', str_replace('toggle ', '', $command));
        $action = 'toggle';
    }

    $startPositions = explode(',', $positions[0]);
    $endPositions = explode(',', $positions[1]);

    for ($x=$startPositions[0]; $x <= $endPositions[0]; $x++) {
        for ($y=$startPositions[1]; $y <= $endPositions[1]; $y++) {
            $key = $x.','.$y;
            $currentValue = isset($lights[$key]) ? $lights[$key] : 0;

            if ($action === 'on') {
                $newValue = $currentValue + 1;
            } elseif ($action === 'off') {
                $newValue = $currentValue - 1;
            } elseif ($action === 'toggle') {
                $newValue = $currentValue + 2;
            }

            $lights[$key] = ($newValue < 0) ? 0 : $newValue;
        }
    }
}

echo array_sum($lights);
