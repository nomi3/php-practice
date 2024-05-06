<?php
[$N, $K] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $N));

$right = 0;
$ans = 0;
$diff = 0;
for ($left = 0; $left < $N; $left++) {
    for ($i = $right; $i < $N; $i++) {
        if ($A[$i] - $A[$left] > $K) {
            break;
        }
        $right = $i;
    }
    $ans += $right - $left;
}
echo $ans . PHP_EOL;
