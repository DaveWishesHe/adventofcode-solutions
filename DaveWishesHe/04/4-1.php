<?php
$secret = "bgvyzdsv";
$counter = 0;
while (true) {
    if (substr(md5($secret . $counter), 0, 5) === "00000") {
        echo $counter . "\n";
        die();
    }
    $counter++;
}
