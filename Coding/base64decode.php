<?php

declare(strict_types=1);

require_once "constans.php";

function base64decode(string $base64):string {
    $binaryString = '';
    $result = '';

    foreach (str_split($base64) as $sign) {
        $binaryValue = decbin(array_search($sign, BASE_64_MAP));
        $binaryString .=
            strlen($binaryValue) !== 6 ?
                str_repeat('0', 6 - strlen($binaryValue)) . $binaryValue :
                $binaryValue;
    }

    foreach (str_split($binaryString, 8) as $package) {
        $result .= chr(bindec($package));
    }

    return $result;
}


