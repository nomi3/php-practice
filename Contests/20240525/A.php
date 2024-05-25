<?php
[$A, $B] = fscanf(STDIN, '%d %d');
$candidates = [1, 2, 3];
$candidates = array_diff($candidates, [$A, $B]);
if (count($candidates) === 1) {
    echo current($candidates) . PHP_EOL;
} else {
    echo -1 . PHP_EOL;
}
