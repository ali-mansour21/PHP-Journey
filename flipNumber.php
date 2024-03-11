<?php
function flipDigits($number)
{
    $digits = str_split((string) $number);
    $digits = array_reverse($digits);
    return $digits;
}
print_r(flipDigits(102));
