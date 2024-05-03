<?php
fscanf(STDIN, "%d", $n);
$bin = sprintf("%010d", decbin($n));
echo $bin . PHP_EOL;
