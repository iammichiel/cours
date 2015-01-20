<?php

function isPalindrome($string)
{
    if (strlen($string) == 1 || strlen($string) == 0) {
        return true;
    } elseif ($string[0] != $string[strlen($string)-1]) {
        return false;
    } else {
        return isPalindrome(substr($string, 1, strlen($string)-2));
    }
}

echo (int) isPalindrome('level') . "\n";
echo (int) isPalindrome('popopopopopopopopopopopopowwwd'), "\n";
echo (int) isPalindrome('pp'), "\n";
