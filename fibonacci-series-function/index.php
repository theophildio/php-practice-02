<?php

function fibonacciSeries($num)
{
    $veryOld = 0;
    $old = 1;
    $new = 1;

    for ($i = 0; $i < $num; $i++) {
        echo $veryOld . " ";
        $old = $new;
        $new = $old + $veryOld;
        $veryOld = $old;
    }
}

fibonacciSeries(15);
