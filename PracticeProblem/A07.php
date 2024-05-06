<?php
[$D] = fscanf(STDIN, '%d');
[$N] = fscanf(STDIN, '%d');
$stdins = array();
while (true) {
    $stdin = trim(fgets(STDIN));
    if ($stdin === '') {
        break;
    }
    $stdins[] = $stdin;
}
$l = $r = [];
for ($i = 0; $i < $N; $i++) {
    [$l[$i], $r[$i]] = explode(' ', $stdins[$i]);
}

$diff = array_fill(0, $D + 2, 0);
for ($i = 0; $i < $N; $i++) {
    $diff[$l[$i]] += 1;
    $diff[$r[$i] + 1] -= 1;
}

$count = 0;
for ($i = 1; $i <= $D; $i++) {
    $count += $diff[$i];
    echo $count . PHP_EOL;
}
