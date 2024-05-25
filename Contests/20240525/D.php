<?php

// 入力の読み込み
fscanf(STDIN, "%d", $N);
$events = [];
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $l, $r);
    $events[] = [$l, 1];  // 'start' を 1 に
    $events[] = [$r, -1]; // 'end' を -1 に
}

// 区間の重なりをカウントする関数
function count_overlapping_intervals($events)
{
    // ソート：位置でソートし、同じ位置ならイベントタイプでソート
    usort($events, function ($a, $b) {
        if ($a[0] == $b[0]) {
            return $b[1] - $a[1]; // 'start' が 'end' より前に
        }
        return $a[0] - $b[0];
    });

    $overlaps = 0;
    $active_intervals = 0;

    // イベントを処理
    foreach ($events as $event) {
        if ($event[1] == 1) { // 'start'
            $overlaps += $active_intervals;
            $active_intervals++;
        } else { // 'end'
            $active_intervals--;
        }
    }

    return $overlaps;
}

// 結果を出力
echo count_overlapping_intervals($events) . PHP_EOL;
