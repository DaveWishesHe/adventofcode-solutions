<?php

$secret = 'iwrupvqb';

for ($i = 1; $i <= 9999999; $i++) {
    $md5 = md5($secret.$i);

    if (substr($md5, 0, 5) === '00000') {
        echo $i;
        break;

    }
}
