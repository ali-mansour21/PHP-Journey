<?php
function getArrayLenth($array)
{
    $count = 0;
    foreach ($array as $a) {
        $count++;
    }
    return $count;
}
function filterNumbers($string)
{
    $pattern = '/\d+/';
    preg_match_all($pattern, $string, $matches);
    $result = $matches[0];
    sort($result);
    return $result;
}
print_r(filterNumbers("hpd12aq3@8w$5"));
