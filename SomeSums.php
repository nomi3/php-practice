<?php
fscanf(STDIN, "%d %d %d", $n, $a, $b);
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $num = $i;
    $total = 0;
    while ($num > 0) {
        $total += $num % 10;
        $num = (int)($num / 10);
    }
    if ($total >= $a && $total <= $b) {
        $sum += $i;
    }
}
echo $sum . PHP_EOL;
