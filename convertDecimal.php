<?php
function convert($number)
{
    $result = [];
    while ($number > 0) {
        $remainder = $number % 2;
        array_push($result, $remainder);
        $number = (int)($number / 2);
    }
    $arrayResult = array_reverse($result);
    $stringResult = implode("", $arrayResult);
    return $stringResult;
}
echo convert(201);
