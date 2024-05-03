<?php
fscanf(STDIN, "%d", $n);

$numbers = trim(fgets(STDIN));

$numbers = explode(' ', $numbers);

$count = 0;

while (true) {
    foreach ($numbers as $key => $value) {
        if ($value % 2 !== 0) {
            break 2;
        }
        $numbers[$key] = $value / 2;
    }
    $count++;
}
echo $count . PHP_EOL;
