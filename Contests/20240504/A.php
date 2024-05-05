<?php
fscanf(STDIN, "%d %d %d %d", $n, $x, $y, $z);

if ($z < $x && $z > $y || $z > $x && $z < $y) {
    echo "Yes" . PHP_EOL;
    exit;
}
echo "No" . PHP_EOL;
