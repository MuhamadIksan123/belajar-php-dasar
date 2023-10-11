<?php

$counter = 1;

while(true) {
    echo "Counter: $counter" . PHP_EOL;
    $counter++;
    if($counter > 10) {
        break;
    }
}