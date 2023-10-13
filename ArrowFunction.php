<?php

$firstname = "Eko";
$lastname = "Kurniawan";

$anonymousFunction = function() use ($firstname, $lastname) {
    return "Hello $firstname $lastname" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();