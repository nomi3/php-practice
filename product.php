<?php

fscanf(STDIN, "%d %d", $a, $b);
echo $a * $b % 2 === 0 ? 'Even' : 'Odd';
echo PHP_EOL;
