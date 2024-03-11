<?php
function getArrayLenth($array)
{
    $count = 0;
    foreach ($array as $a) {
        $count++;
    }
    return $count;
}
function mergeSort($array)
{
    $arrayLength = getArrayLenth($array);
    if ($arrayLength <= 1) {
        return $array;
    }
    $mid =  $arrayLength / 2;
    $rigthArray = array_splice($array, $mid, $arrayLength);
    $leftArray = array_splice($array, 0, $mid);
    $rigth = mergeSort($rigthArray);
    $left = mergeSort($leftArray);
    $i = 0;
    $j = 0;
    $k = 0;
    while ($i < getArrayLenth($left) && $j < getArrayLenth($rigth)) {
        if ($left[$i] < $rigth[$j]) {
            $array[$k] = $left[$i];
            $i++;
        } else {
            $array[$k] = $rigth[$j];
            $j++;
        }
        $k++;
    }
    while ($i < getArrayLenth($left)) {
        $array[$k] = $left[$i];
        $i++;
        $k++;
    }
    while ($j < getArrayLenth($rigth)) {
        $array[$k] = $rigth[$j];
        $j++;
        $k++;
    }
    return $array;
}
print_r(mergeSort([1, 22, 13, 4, 2, 9]));
