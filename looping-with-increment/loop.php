<?php

// For Loops
function printEvenNumbers1($num)
{
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
}

printEvenNumbers1(20);

echo "\n";

// While Loops
function printEvenNumbers2($num)
{
    $i = 1;
    while ($i <= $num) {
        if ($i % 2 == 0) {
            echo $i;
        }
        $i++;
    }
}

printEvenNumbers2(20);

echo "\n";

// Do While Loops
function printEvenNumbers3($num)
{
    $i = 1;
    do {
        if ($i % 2 == 0) {
            echo $i;
        }
        $i++;
    } while ($i <= $num);
}

printEvenNumbers3(20);
