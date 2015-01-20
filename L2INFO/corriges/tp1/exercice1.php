<?php

function getAge($birthYear)
{
    return date('Y') - $birthYear;
}

echo "Age en 1980 : ", getAge(1980), "\n";
echo "Age en 1985 : ", getAge(1985), "\n";
echo "Age en 1990 : ", getAge(1990), "\n";
