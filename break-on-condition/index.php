<?php

$number = 20;
$veryOld = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < $number; $i++) {
    if ($veryOld > 100) {
        break;
    }
    echo $veryOld . " ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}
