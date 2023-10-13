<?php

$name = "Eko"; // Global Scope

function sayHello() {
    global $name; // Global Keyword
    echo "Hello $name" . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();