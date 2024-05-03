<?php
fscanf(STDIN, "%s", $s);
while (true) {
    $before = $s;
    $ending = ['dream', 'dreamer', 'erase', 'eraser'];
    foreach ($ending as $value) {
        $endingOfString = substr($s, -strlen($value));
        if ($endingOfString === $value) {
            $s = substr($s, 0, -strlen($value));
            break;
        }
    }

    if (empty($s)) {
        echo 'YES' . PHP_EOL;
        exit;
    }
    if ($before === $s) {
        echo 'NO' . PHP_EOL;
        exit;
    }
}
