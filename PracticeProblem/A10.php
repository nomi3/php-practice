<?php
[$N] = fscanf(STDIN, '%d');
$a = fscanf(STDIN, str_repeat("%d", $N));
[$D] = fscanf(STDIN, '%d');
for ($i = 0; $i < $D; $i++) {
    [$l[$i], $r[$i]] = fscanf(STDIN, '%d %d');
}
$prefixMax = array_fill(0, $N, 0);
$prefixMax[0] = $a[0];
for ($i = 1; $i < $N; $i++) {
    $prefixMax[$i] = max($prefixMax[$i - 1], $a[$i]);
}
$surfixMax = array_fill(0, $N, 0);
$surfixMax[$N - 1] = $a[$N - 1];
for ($i = $N - 2; $i >= 0; $i--) {
    $surfixMax[$i] = max($surfixMax[$i + 1], $a[$i]);
}
for ($i = 0; $i < $D; $i++) {
    $max = max($prefixMax[$l[$i] - 2] ?? 0, $surfixMax[$r[$i]] ?? 0);
    echo $max . PHP_EOL;
}
