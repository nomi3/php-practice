<?php
[$N, $M] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $M));
sort($A);
$numbers = range(1, $N);
for ($i = 0; $i < $M; $i++) {
    if ($A[$i] === $N || $A[$i] === 1) {
        echo -1 . PHP_EOL;
        exit;
    }
    $tmp = $numbers[$A[$i] - 1];
    $numbers[$A[$i] - 1] = $numbers[$A[$i]];
    $numbers[$A[$i]] = $tmp;
}
echo implode(' ', $numbers) . PHP_EOL;
