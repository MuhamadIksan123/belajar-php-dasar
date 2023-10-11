<?php

$name = "Eko Kurniawan Khannedy";

echo "Nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.81";
var_dump($valueFloat);

$name = 'Eko';

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello " . $name . " Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name Selamat Belajar PHP" . PHP_EOL;

$var = "eko";
echo "This is {$var}s";