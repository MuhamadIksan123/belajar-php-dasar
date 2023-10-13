<?php 

function factorialLoop(int $value): int {
    $total = 1;
    for($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1*2*3*4*5);

function factoriaRecursive(int $value): int {
    if($value == 1) {
        return 1;
    } else {
        return $value * factoriaRecursive($value - 1);
    }
}

var_dump(factoriaRecursive(5));

function loop(int $value): int {
    if($value == 0) {
        return 1;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value-1);
    }
}

loop(3000000);