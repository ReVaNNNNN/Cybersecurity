<?php

declare(strict_types=1);

require_once "constans.php";

function base64encode(string $phrase):string {
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

    foreach (str_split($binaryString, 6) as $package) {
        if (strlen($package) !== 6) {
            $zeroNumbers = 6 - strlen($package);
            $package .= str_repeat('0', $zeroNumbers);
        }

        $result.= BASE_64_MAP[bindec($package)];
    }

    $padAmount = strlen($binaryString) % 24 !== 0 ? 3 - (strlen($binaryString) % 24) / 8 : 0;
    $result .= str_repeat('=', $padAmount);

    return $result;
}
