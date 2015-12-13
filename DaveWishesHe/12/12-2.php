<?php
$data = json_decode(file_get_contents("12.input"));

#$data = array(1,2,3);
#$data = json_decode('[1,{"c":"red","b":2},3]');
#$data = json_decode('{"data":{"d":"red","e":[1,2,3,4],"f":5}}');
#$data = json_decode('[1,"red",5]');

function sum($input)
{
    $total = 0;

    foreach ($input as $value) {
        if (is_array($value) || is_object($value)) {
            $total += sum($value);
        } elseif (is_object($input) && $value === "red") {
			return 0;
		} elseif (is_int($value)) {
			$total += $value;
		}
    }

    return $total;
}
# NOT: 53200
echo sum($data) . "\n";
