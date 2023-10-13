<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function boo(){
    echo "Boo" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "boo";
$functionYangAkanDipanggil();


function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name) {
    return "Sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");
