<?php

$num500 = (int)trim(fgets(STDIN));
$num100 = (int)trim(fgets(STDIN));
$num50 = (int)trim(fgets(STDIN));
$sum = (int)trim(fgets(STDIN));

$count = 0;

for ($i = 0; $i <= $num500; $i++) {
    for ($j = 0; $j <= $num100; $j++) {
        for ($k = 0; $k <= $num50; $k++) {
            if ($i * 500 + $j * 100 + $k * 50 === $sum) {
                $count++;
            }
        }
    }
}

echo $count . PHP_EOL;
