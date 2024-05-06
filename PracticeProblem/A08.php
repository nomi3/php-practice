<?php
[$H, $W] = fscanf(STDIN, str_repeat("%d", 2));
for ($i = 0; $i < $H; $i++) {
    $xh[$i] = fscanf(STDIN, str_repeat("%d", $W));
}
[$Q] = fscanf(STDIN, "%d");
for ($i = 0; $i < $Q; $i++) {
    $square[$i] = fscanf(STDIN, str_repeat("%d", 4));
}
$prefixSum = array_fill(0, $H + 1, array_fill(0, $W + 1, 0));
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        $prefixSum[$i + 1][$j + 1] = $prefixSum[$i][$j + 1] + $prefixSum[$i + 1][$j] - $prefixSum[$i][$j] + $xh[$i][$j];
    }
}

for ($i = 0; $i < $Q; $i++) {
    [$x1, $y1, $x2, $y2] = $square[$i];
    $sum = $prefixSum[$x2][$y2] - $prefixSum[$x1 - 1][$y2] - $prefixSum[$x2][$y1 - 1] + $prefixSum[$x1 - 1][$y1 - 1];
    echo $sum . PHP_EOL;
}
