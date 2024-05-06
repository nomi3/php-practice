<?php
fscanf(STDIN, "%d %d", $N, $X);
$A = explode(" ", trim(fgets(STDIN)));

function binarySearch($arr, $x)
{
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);
        if ($arr[$mid] == $x) {
            return $mid + 1;
        } elseif ($arr[$mid] < $x) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1;
}

echo binarySearch($A, $X) . PHP_EOL;
