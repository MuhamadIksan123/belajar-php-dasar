<?php

$names = ["Eko", "Kurniawan", "Khannedy"];

for($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "$index : $name" . PHP_EOL;
}

$persons = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($persons as $key => $person) {
    echo "$key : $person" . PHP_EOL;
}