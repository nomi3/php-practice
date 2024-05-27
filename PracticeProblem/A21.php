<?php
fscanf(STDIN, "%d", $N);
$P = [null];
$A = [null];
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $p, $a);
    $P[] = $p;
    $A[] = $a;
}
$dp = array_fill(0, $N + 1, array_fill(0, $N + 1, 0));
for ($l = 1; $l <= $N; $l++) {
    for ($r = $N; $r > 0; $r--) {
        if ($l > $r) continue;
        // $lと$rは現在地
        $score_l = 0;
        $score_r = 0;
        // $lを選んだ場合、$l-1 < $P[$l-1]かつ$P[$l-1] <= $rの場合は$A[$l-1]を加算
        if (isset($P[$l - 1]) && $l - 1 < $P[$l - 1] && $P[$l - 1] <= $r) {
            $score_l = $A[$l - 1];
        }
        // $rを選んだ場合、$l <= $P[$r]かつ$P[$r] < $r+1の場合は$A[$r]を加算
        if (isset($P[$r + 1]) && $l <= $P[$r + 1] && $P[$r + 1] < $r + 1) {
            $score_r = $A[$r + 1];
        }
        $dp[$l][$r] = max(($dp[$l - 1][$r] ?? 0) + $score_l, ($dp[$l][$r + 1] ?? 0) + $score_r);
    }
}
$ans = 0;
for ($i = 1; $i <= $N; $i++) {
    $ans = max($ans, $dp[$i][$i]);
}
echo $ans . PHP_EOL;
