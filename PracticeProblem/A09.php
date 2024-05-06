<?php
[$H, $W, $N] = fscanf(STDIN, str_repeat("%d", 3));
for ($i = 1; $i <= $N; $i++) {
    [$a[$i], $b[$i], $c[$i], $d[$i]] = fscanf(STDIN, str_repeat("%d", 4));
}

$prefixSum = array_fill(0, $H + 1, array_fill(0, $W + 1, 0));
for ($i = 1; $i <= $N; $i++) {
    $prefixSum[$a[$i]][$b[$i]] += 1;
    $prefixSum[$c[$i] + 1][$d[$i] + 1] += 1;
    $prefixSum[$a[$i]][$d[$i] + 1] -= 1;
    $prefixSum[$c[$i] + 1][$b[$i]] -= 1;
}

for ($i = 1; $i <= $H; $i++) {
    for ($j = 1; $j <= $W; $j++) {
        $prefixSum[$i][$j] += $prefixSum[$i - 1][$j] + $prefixSum[$i][$j - 1] - $prefixSum[$i - 1][$j - 1];
        echo $prefixSum[$i][$j] . ' ';
    }
    echo PHP_EOL;
}
