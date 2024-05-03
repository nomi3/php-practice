<?php
fscanf(STDIN, "%d %d", $n, $x);
$numbers = trim(fgets(STDIN));
$numbers = explode(' ', $numbers);
foreach ($numbers as $number) {
    if ($number == $x) {
        echo "Yes" . PHP_EOL;
        exit;
    }
}
echo "No" . PHP_EOL;
