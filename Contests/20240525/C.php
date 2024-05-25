<?php
[$N, $T] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $T));

echo find_bingo_turn($N, $T, $A) . PHP_EOL;

function find_bingo_turn($N, $T, $A)
{
    $marked = array_fill(0, $N, array_fill(0, $N, false));
    $rows = array_fill(0, $N, 0);
    $cols = array_fill(0, $N, 0);
    $diag1 = 0;
    $diag2 = 0;

    for ($turn = 0; $turn < $T; $turn++) {
        $number = $A[$turn];
        $i = intdiv($number - 1, $N);
        $j = ($number - 1) % $N;

        if ($marked[$i][$j]) {
            continue;
        }

        $marked[$i][$j] = true;
        $rows[$i]++;
        $cols[$j]++;

        if ($i == $j) {
            $diag1++;
        }
        if ($i + $j == $N - 1) {
            $diag2++;
        }

        if ($rows[$i] == $N || $cols[$j] == $N || $diag1 == $N || $diag2 == $N) {
            return $turn + 1;
        }
    }

    return -1;
}
