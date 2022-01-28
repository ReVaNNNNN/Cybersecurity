<?php

declare(strict_types=1);

function caesarCipher(string $cipher, int $startRange, int $stopRange):void {
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
}
