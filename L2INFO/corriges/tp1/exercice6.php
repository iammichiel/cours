<?php

function getScore($name) {
    $score = 0;
    $letters = str_split('abcdefghijklmnopqrstuvwxyz');
    foreach (str_split(strtolower($name)) as $letter) {
        if (in_array($letter, $letters)) {
            $score += array_search($letter, $letters) + 1;
        }
    }

    return $score;
}



echo getScore('PHP') . "\n";
echo getScore('Lorem ipsum') . "\n";
echo getScore('Je suis charlie') . "\n";
echo getScore('we do not forget, we do not forgive, we are legion, expect us.') . "\n";
