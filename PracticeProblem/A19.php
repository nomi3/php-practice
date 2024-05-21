<?php
[$N, $W] = fscanf(STDIN, '%d %d');
$v = [];
$w = [];
for ($i = 0; $i < $N; $i++) {
    [$wi, $vi] = fscanf(STDIN, '%d %d');
    $v[] = $vi;
    $w[] = $wi;
}
$dp = array_fill(0, $N + 1, array_fill(0, $W + 1, 0));

for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j <= $W; $j++) {
        if ($j < $w[$i]) {
            $dp[$i + 1][$j] = $dp[$i][$j];
        } else {
            $dp[$i + 1][$j] = max($dp[$i][$j], $dp[$i][$j - $w[$i]] + $v[$i]);
        }
    }
}

echo $dp[$N][$W] . PHP_EOL;
