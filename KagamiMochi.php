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

rsort($stdins);

$stdins = array_unique($stdins);

echo count($stdins) . PHP_EOL;
