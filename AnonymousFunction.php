<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good by $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function(string $name): string {
    return strtoupper(($name));
});

$filterFunction = function(string $name): string {
    return strtoupper(($name));
};

sayGoodBye("Eko", $filterFunction);

$firstname = "Eko";
$lastname = "Kurniawan";

$sayHelloEko = function() use ($firstname, $lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};


$firstname = "Eko";
$lastname = "Kurniawan";
$sayHelloEko();