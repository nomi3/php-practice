<?php
[$N] = fscanf(STDIN, '%d');
$A = fscanf(STDIN, str_repeat('%d', $N));


$rank = [];
$sorted = $A;
sort($sorted);

$prev = -1;
$prev_rank = 0;
foreach ($sorted as $a) {
    if ($a === $prev) {
        $rank[$a] = $prev_rank;
    } else {
        $rank[$a] = $prev_rank + 1;
    }
    $prev = $a;
    $prev_rank = $rank[$a];
}

echo implode(' ', array_map(function ($a) use ($rank) {
    return $rank[$a];
}, $A)) . PHP_EOL;
