<?php
$secret = "bgvyzdsv";
$counter = 0;
while (true) {
    if (substr(md5($secret . $counter), 0, 6) === "000000") {
        echo $counter . "\n";
        die();
    }
    $counter++;
}
