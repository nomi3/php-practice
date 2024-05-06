<?php
$words = [
    "りんご",
    "ごりら",
    "らーめん",
    "りん",
];

array_unshift($words, "しりとり");

$end_word_indexes = [];
foreach ($words as $index => $word) {
    $final = mb_substr($word, -1);
    if ($final === "ん") {
        $end_word_indexes[] = $index;
    }
}

$dist = array_fill(0, count($words), -1);
$dist[0] = 0;
$que = new SplQueue();
$que->enqueue(0);
while (!$que->isEmpty()) {
    $v = $que->dequeue();
    for ($u = 0; $u < count($words); $u++) {
        if ($dist[$u] !== -1) {
            continue;
        }
        $first = mb_substr($words[$v], -1);
        $last = mb_substr($words[$u], 0, 1);
        if ($first === $last) {
            $dist[$u] = $dist[$v] + 1;
            $que->enqueue($u);
        }
    }
}
$min_end_dist = INF;
foreach ($end_word_indexes as $index) {
    if ($dist[$index] !== -1) {
        $min_end_dist = min($min_end_dist, $dist[$index]);
    }
}
if ($min_end_dist === INF) {
    echo -1 . PHP_EOL;
} else {
    echo $min_end_dist . PHP_EOL;
}
