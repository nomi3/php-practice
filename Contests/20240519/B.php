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

$modStr = '998244353';

foreach ($cases as $case) {
    [$A1, $A2, $C] = $case;
    $A = min($A1, $A2);
    $B = max($A1, $A2);
    if ($B == $C || $B == $C - 1) {
        $all = 9 * 9 * 10 ** ($A + $B - 2);
        $same = 0;
        $sameMod = 0;
        $diff = 0;
        $ans = 0;
        if ($A == $B) {
            $base = bcpow('10', $A - 1); // 10の(A-1)乗
            $part1 = bcadd(bcmul('8', $base), '1'); // 8 * 10の(A-1)乗 + 1
            $mod1 = bcmod($part1, $modStr);
            $part2 = bcmul('4', $base); // 4 * 10の(A-1)乗
            $mod2 = bcmod($part2, $modStr);
            $same = bcmul($part1, $part2);
            $sameMod = bcmod(bcmul($mod1, $mod2), $modStr);
        } else {
            $baseA = bcpow('10', $A); // 10のA乗
            $baseB = bcpow('10', $B - 1); // 10のB-1乗
            $part1 = bcsub(bcmul('9', $baseB), bcpow('10', $A)); // 9 * 10の(B-1)乗 - 10のA乗
            $part1 = bcadd($part1, '1'); // + 1
            $part2 = bcsub(bcpow('10', $A), '1'); // 10のA乗 - 1
            $part3 = bcsub(bcpow('10', $A), '2'); // 10のA乗 - 2
            $part4 = bcdiv(bcmul($part3, $part2), '2'); // (10のA乗 - 2) * (10のA乗 - 1) / 2
            $same = bcadd(bcmul($part1, $part2), $part4);
            $sameMod = bcmod($same, $modStr);
        }
        $diff = $all - $same;
        if ($B == $C) {
            $ans = $sameMod;
        } else {
            $diffMod = bcmod($diff, $modStr);
            $ans = $diffMod;
        }
        echo $ans . PHP_EOL;
    } else {
        echo 0 . PHP_EOL;
    }
}
