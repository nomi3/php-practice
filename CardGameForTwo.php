<?php
fscanf(STDIN, "%d", $n);

$numbers = trim(fgets(STDIN));

$numbers = explode(' ', $numbers);

$alice = 0;
$bob = 0;

rsort($numbers);

for ($i = 0; $i < $n; $i++) {
    if ($i % 2 === 0) {
        $alice += $numbers[$i];
    } else {
        $bob += $numbers[$i];
    }
}

echo $alice - $bob . PHP_EOL;
