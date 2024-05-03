<?php
fscanf(STDIN, "%s", $s);
$marbles = str_split($s);
$marbles = array_count_values($marbles);
if (!key_exists(1, $marbles)) {
    echo 0 . PHP_EOL;
} else {
    echo $marbles[1] . PHP_EOL;
}
