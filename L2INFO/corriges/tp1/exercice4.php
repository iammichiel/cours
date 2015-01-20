<?php

function calculateFactorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return  $n * calculateFactorial($n - 1);
    }
}

echo calculateFactorial(0), "\n";
echo calculateFactorial(1), "\n";
echo calculateFactorial(2), "\n";;
echo calculateFactorial(3), "\n";;
echo calculateFactorial(4), "\n";;
echo calculateFactorial(99), "\n";;
