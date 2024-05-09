<?php
[$N] = fscanf(STDIN, '%d');
$A = fscanf(STDIN, str_repeat('%d', $N - 1));
$B = fscanf(STDIN, str_repeat('%d', $N - 2));

$time[1] = 0;
$time[2] = $time[1] + $A[0];
for ($i = 3; $i <= $N; $i++) {
    $time[$i] = min($time[$i - 1] + $A[$i - 2], $time[$i - 2] + $B[$i - 3]);
}
echo $time[$N] . PHP_EOL;
