<?php

declare(strict_types=1);

const BASE_64_MAP = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '/', '\0'
];

$base64code = 'a290ZWN6ZWsgaSBtbG90ZWN6ZWs=';
$binaryString = '';
$result = '';

foreach (str_split($base64code) as $sign) {
    $binaryValue = decbin(array_search($sign, BASE_64_MAP));
    $binaryString .=
        strlen($binaryValue) !== 6 ?
            str_repeat('0', 6 - strlen($binaryValue)) . $binaryValue :
            $binaryValue;
}

foreach (str_split($binaryString, 8) as $package) {
    $result .= chr(bindec($package));
}

var_dump($result);

