<?php
[$N, $S] = fscanf(STDIN, '%d %d');
$A = fscanf(STDIN, str_repeat('%d', $N));
$dp = array_fill(0, $N + 1, array_fill(0, $S + 1, false));
$dp[0][0] = true;
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j <= $S; $j++) {
        if ($j < $A[$i]) {
            if ($dp[$i][$j]) {
                $dp[$i + 1][$j] = true;
            } else {
                $dp[$i + 1][$j] = false;
            }
        } else {
            if ($dp[$i][$j] || $dp[$i][$j - $A[$i]]) {
                $dp[$i + 1][$j] = true;
            } else {
                $dp[$i + 1][$j] = false;
            }
        }
    }
}
if ($dp[$N][$S]) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}
