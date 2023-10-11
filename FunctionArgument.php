<?php

function sayHello($first_name, $last_name = '') {
    echo "Hello $first_name $last_name" . PHP_EOL;
}

sayHello("Eko");
sayHello("Budi");
sayHello("Joko", "Moro");

function sum($first, $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);


function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);