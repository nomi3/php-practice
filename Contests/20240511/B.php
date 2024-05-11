<?php
[$N, $K] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $N));
$sum = 1;
$currentSum = 0;
for ($i = 0; $i < $N; $i++) {
    if ($currentSum + $A[$i] > $K) {
        $sum++;
        $currentSum = $A[$i];
    } else {
        $currentSum += $A[$i];
    }
}
echo $sum . PHP_EOL;
