<?php
function getArrayLenth($array)
{
    $count = 0;
    foreach ($array as $a) {
        $count++;
    }
    return $count;
}
function reverse($array)
{
    $reversedArray = [];
    for ($i = getArrayLenth($array) - 1; $i >= 0; $i--) {
        $reversedArray[$i] = $array[$i];
    }
    return $reversedArray;
}
function convert($number)
{
    $result = [];
    while ($number > 0) {
        $remainder = $number % 2;
        array_push($result, $remainder);
        $number = (int)($number / 2);
    }
    $arrayResult = reverse($result);
    $stringResult = implode("", $arrayResult);
    return $stringResult;
}
echo convert(10);