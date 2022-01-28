<?php

declare(strict_types=1);


function hexAscii(string $hex):string  {
    $result = '';

    foreach (str_split($hex, 2) as $sign) {
        $result .= chr(hexdec($sign));
    }

    return $result;
}