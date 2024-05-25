<?php
[$N, $M] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $N));
$B = fscanf(STDIN, str_repeat('%d', $M));
$C = array_merge($A, $B);
sort($C);

$a_renzoku = 0;
for ($i = 0; $i < $N + $M; $i++) {
    if (in_array($C[$i], $A)) {
        $a_renzoku++;
    } else {
        $a_renzoku = 0;
    }
    if ($a_renzoku === 2) {
        echo "Yes" . PHP_EOL;
        exit;
    }
}
echo "No" . PHP_EOL;
