<?php

// Skip multiples of 5

function skipMultiplesOf5($num)
{
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 5 == 0) {
            continue;
        } else {
            echo $i . " ";
        }
    }
}

skipMultiplesOf5(50);
