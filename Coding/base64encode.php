<?php

declare(strict_types=1);

const BASE_64_MAP = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '/', '\0'
];


$phrase = 'koteczek12';
$binaryString = '';
$result = '';

foreach (str_split($phrase) as $sign) {
    $dec = decbin(ord($sign));
    if (strlen($dec) !== 8) {
        $zeroNumbers = 8 - strlen($dec);
        $dec = str_repeat('0', $zeroNumbers) . $dec;
    }
    $binaryString.= $dec;
}

$binaryPackage = str_split($binaryString, 6);

foreach ($binaryPackage as $package) {
    if (strlen($package) !== 6) {
        $zeroNumbers = 6 - strlen($package);
        $package .= str_repeat('0', $zeroNumbers);
    }

    $result.= BASE_64_MAP[bindec($package)];
}

//@TODO dodanie znaków = jeśli bity nie podzielne przez 24

echo var_dump($result);
echo PHP_EOL;
