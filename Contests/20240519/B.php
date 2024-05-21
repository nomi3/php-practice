<?php
[$T] = fscanf(STDIN, '%d');

$stdins = array();
while (true) {
    $stdin = trim(fgets(STDIN));
    if ($stdin === '') {
        break;
    }
    $stdins[] = $stdin;
}
$cases = array_map(function ($stdin) {
    return explode(' ', $stdin);
}, $stdins);
$mod = 998244353;


foreach ($cases as $case) {
    [$A1, $A2, $C] = $case;
    $A = min($A1, $A2);
    $B = max($A1, $A2);
    if ($B == $C || $B == $C - 1) {
        $all = 9 * 9 * 10 ** ($A + $B - 2);
        $same = 0;
        $diff = 0;
        $ans = 0;
        if ($A == $B) {
            $same = (8 * 10 ** ($A - 1) + 1) * 4 * 10 ** ($A - 1);
        } else {
            $same = (9 * 10 ** ($B - 1) - 10 ** $A + 1) * (10 ** $A - 1) + (10 ** $A - 1) * (10 ** $A - 2) / 2;
        }
        $diff = $all - $same;
        if ($B == $C) {
            $ans = $same;
        } else {
            $ans = $diff;
        }
        echo $ans % $mod . PHP_EOL;
    } else {
        echo 0 . PHP_EOL;
    }
}
