<?php
[$N] = fscanf(STDIN, '%d');
$A = fscanf(STDIN, str_repeat('%d', $N));
$mod = 10 ** 8;
sort($A);
$totalSum = array_sum($A) * ($N - 1);
for ($i = 0; $i < $N - 1; $i++) {
    if ($A[$i] + $A[$i + 1] >= $mod) {
        $count = ($N - $i - 1);
        $totalSum -= $mod * $count;
    } else if ($A[$i] + $A[$N - 1] < $mod) {
        continue;
    } else {
        $left = $i + 1;
        $right = $N - 1;
        while ($left < $right) {
            $mid = intdiv($left + $right, 2);
            if ($A[$i] + $A[$mid] >= $mod) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        $count = ($N - $left);
        $totalSum -= $mod * $count;
    }
}
echo $totalSum . PHP_EOL;
