<?php
// 標準入力からstringを取得する
[$S] = fscanf(STDIN, str_repeat('%s', 1));
[$T] = fscanf(STDIN, str_repeat('%s', 1));

$dp = array_fill(0, strlen($S) + 1, array_fill(0, strlen($T) + 1, 0));

// $Sを1文字ずつ分割した配列にする
$S = str_split($S);
$T = str_split($T);

for ($i = 1; $i <= count($S); $i++) {
    for ($j = 1; $j <= count($T); $j++) {
        $limit = min($i, $j);
        if ($S[$i - 1] === $T[$j - 1]) {
            $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]) + 1;
            $dp[$i][$j] = min($dp[$i][$j], $limit);
        } else {
            $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
        }
    }
}
print_r($dp);
echo $dp[count($S)][count($T)] . PHP_EOL;
