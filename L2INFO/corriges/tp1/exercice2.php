<?php

function countStringLength($string)
{
    $length = 0;
    $string = str_split($string);
    foreach ($string as $char) {
        $length++;
    }

    return $length;
}

function countStringLengthWithIsset($string)
{
    $length = 0;
    while (isset($string{$length})) {
        $length++;
    }

    return $length;
}


echo 'Function array : ',  countStringLength('Say hello'), "\n";
echo 'Function isset : ', countStringLengthWithIsset('Say hello'), "\n";
