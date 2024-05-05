<?php
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);

// $sと$tを1文字ずつ比較して、$tの文字が$sと一致する場合はその位置を記録する
$positions = [];
$start = 0;
for ($i = 0; $i < strlen($s); $i++) {
    for ($j = $start; $j < strlen($t); $j++) {
        if ($s[$i] === $t[$j]) {
            $positions[] = $j + 1;
            $start = $j + 1;
            break;
        }
    }
}
echo implode(' ', $positions) . PHP_EOL;
