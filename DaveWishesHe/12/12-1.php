<?php
$data = json_decode(file_get_contents("12.input"), true);

function sum($input) 
{
    $total = 0;

    foreach ($input as $value) {
        if (is_array($value)) {
            $total += sum($value);
        } elseif (is_int($value)) {
            $total += $value;
        }
    }

    return $total;
}

echo sum($data) . "\n";

