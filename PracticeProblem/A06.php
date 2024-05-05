<?php
[$N, $Q] = fscanf(STDIN, str_repeat('%d', 2));
$a = fscanf(STDIN, str_repeat('%d', $N));
$stdins = array();
while (true) {
    $stdin = trim(fgets(STDIN));
    if ($stdin === '') {
        break;
    }
    $stdins[] = $stdin;
}

$l = $r = [];
for ($i = 0; $i < $Q; $i++) {
    [$l[$i], $r[$i]] = explode(' ', $stdins[$i]);
}

$prefixSum = array_fill(0, $N + 1, 0);
for ($i = 1; $i <= $N; $i++) {
    $prefixSum[$i] = $prefixSum[$i - 1] + $a[$i - 1];
}

for ($i = 0; $i < $Q; $i++) {
    $sum = $prefixSum[$r[$i]] - $prefixSum[$l[$i] - 1];
    print($sum . PHP_EOL);
}
