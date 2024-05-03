<?php

fscanf(STDIN, "%d %d", $n, $y);

for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j <= $n - $i; $j++) {
        $k = $n - $i - $j;
        if ($i * 10000 + $j * 5000 + $k * 1000 === $y) {
            echo "$i $j $k\n";
            exit;
        }
    }
}
echo "-1 -1 -1\n";
