<?php
function reverse($array)
{
    $reversedArray = [];
    for ($i = getArrayLenth($array) - 1; $i >= 0; $i--) {
        $reversedArray[$i] = $array[$i];
    }
    return $reversedArray;
}
function getArrayLenth($array)
{
    $count = 0;
    foreach ($array as $a) {
        $count++;
    }
    return $count;
}
function flipDigits($number)
{
    $digits = str_split((string) $number);
    $digits = reverse($digits);
    return $digits;
}
print_r(flipDigits(102));
