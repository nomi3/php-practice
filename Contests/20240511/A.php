<?php
[$N] = fscanf(STDIN, '%d');
$H = fscanf(STDIN, str_repeat('%d', $N));

for ($i = 1; $i < $N; $i++) {
    if ($H[$i] > $H[0]) {
        echo $i + 1 . PHP_EOL;
        exit;
    }
}
echo -1 . PHP_EOL;
