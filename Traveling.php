<?php
$stdins = array();
while (true) {
    $stdin = trim(fgets(STDIN));
    if ($stdin === '') {
        break;
    }
    $stdins[] = $stdin;
}

$num = array_shift($stdins);

$travel = array();
foreach ($stdins as $stdin) {
    $travel[] = explode(' ', $stdin);
}

$before = [0, 0, 0];
foreach ($travel as $t) {
    $time = $t[0] - $before[0];
    $x = $t[1] - $before[1];
    $y = $t[2] - $before[2];
    $distance = abs($x) + abs($y);
    if ($time < $distance || ($time - $distance) % 2 !== 0) {
        echo 'No' . PHP_EOL;
        return;
    }
    $before = $t;
}
echo 'Yes' . PHP_EOL;
