<?php
$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = $line;
}

$num = array_shift($inputs);
$max = 0;
$shoulderSum = 0;
$shoulders = [];
$heads = [];

foreach ($inputs as $line) {
    list($shoulder, $head) = explode(' ', $line);
    $shoulderSum += $shoulder;
    $shoulders[] = $shoulder;
    $heads[] = $head;
}

for ($i = 0; $i < $num; $i++) {
    $max = max($max, $shoulderSum - $shoulders[$i] + $heads[$i]);
}

echo $max . PHP_EOL;
