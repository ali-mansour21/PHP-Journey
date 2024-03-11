<?php
function getArrayLenth($array)
{
    $count = 0;
    foreach ($array as $a) {
        $count++;
    }
    return $count;
}
function evaluateOperation($string)
{
    $pattern = '/\d+/';
    preg_match_all($pattern, $string, $matches);
    $numbers = $matches[0];
    $array = explode(" ", $string);
    $operator = null;
    foreach ($array as $element)
        switch ($element) {
            case "*":
            case "+":
            case "-":
            case "/":
                $operator = $element;
                break;
        }
    $result =  $numbers[0];
    for ($j = 1; $j < getArrayLenth($numbers); $j++) {
        if ($operator == "*") {
            $result = $result * $numbers[$j];
        } elseif ($operator == "+") {
            $result += $numbers[$j];
        } elseif ($operator == "-") {
            $result -= $numbers[$j];
        } else {
            $result /= $numbers[$j];
        }
    }
    return $result;
}
echo evaluateOperation("100 - 5");
