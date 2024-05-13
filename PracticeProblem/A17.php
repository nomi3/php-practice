<?php
[$N] = fscanf(STDIN, '%d');
$A = fscanf(STDIN, str_repeat('%d', $N - 1));
$B = fscanf(STDIN, str_repeat('%d', $N - 2));
$time[1] = 0;
$time[2] = $time[1] + $A[0];
for ($i = 3; $i <= $N; $i++) {
    $time[$i] = min($time[$i - 1] + $A[$i - 2], $time[$i - 2] + $B[$i - 3]);
}
$path = [$N];
$target = $N;
for ($i = $N; $i >= 2; $i--) {
    if ($i !== $target) {
        continue;
    }
    if ($time[$i] === $time[$i - 1] + $A[$i - 2]) {
        $path[] = $i - 1;
        $target = $i - 1;
    } else {
        $path[] = $i - 2;
        $target = $i - 2;
    }
}
echo count($path) . PHP_EOL;
sort($path);
echo implode(' ', $path) . PHP_EOL;
