<?php
fscanf(STDIN, "%d %d", $n, $k);
$count = 0;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        $l = $k - $i - $j;
        if ($l > $n) {
            continue;
        }
        if ($l <= 0) {
            break 1;
        }
        $count++;
    }
}
echo $count . PHP_EOL;
