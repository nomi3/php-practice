<?php
[$N, $K] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $N));
$left = 0;
$right = 10 ** 9;
while ($left < $right) {
    $mid = intdiv($left + $right, 2);
    $cnt = 0;
    for ($i = 0; $i < $N; $i++) {
        $cnt += intdiv($mid, $A[$i]);
    }
    if ($cnt >= $K) {
        $right = $mid;
    } else {
        $left = $mid + 1;
    }
}
echo $right . PHP_EOL;
