<?php

declare(strict_types=1);

$cipher = "2m{y!\"%w2'z{&o2UfX~ws%!._s+{ (&@Vwu{ (&@_w%{v{(&0";
$startRange = -100;
$stopRange = 100;
$result = '';

foreach (range($startRange, $stopRange) as $number) {
    foreach (str_split($cipher) as $sign) {
        if (ord($sign) + $number > 126) {
            $dec = ord($sign) + $number - 95;
        } elseif (ord($sign) + $number < 32) {
            $dec = ord($sign) + $number + 95;
        } else {
            $dec = ord($sign) + $number;
        }

        $result .= chr($dec);
    }
    echo $result;
    echo PHP_EOL;
    $result = '';
}
