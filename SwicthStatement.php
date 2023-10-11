<?php

$nilai = 'D';

if($nilai == 'A') {
    echo 'Anda lulus dengan sangat baik' . PHP_EOL;
} elseif($nilai == 'B' || $nilai == 'C') {
    echo 'Anda lulus' . PHP_EOL;
} else {
    echo 'Maaf, Anda tidak lulus' . PHP_EOL;
} 

switch ($nilai) {
    case 'A':
        echo 'Anda lulus dengan sangat baik' . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo 'Anda lulus' . PHP_EOL;
        break;
    default:
        echo 'Maaf, Anda tidak lulus' . PHP_EOL;
        break;
}

switch ($nilai) :
    case 'A':
        echo 'Anda lulus dengan sangat baik' . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo 'Anda lulus' . PHP_EOL;
        break;
    default:
        echo 'Maaf, Anda tidak lulus' . PHP_EOL;
        break;
    endswitch;