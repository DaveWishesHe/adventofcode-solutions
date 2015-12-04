<?php

$secret = 'iwrupvqb';

for ($i = 999999; $i <= 9999999; $i++) {
    $md5 = md5($secret.$i);

    if (substr($md5, 0, 6) === '000000') {
        echo $i;
        break;

    }
}
