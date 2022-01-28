<?php

declare(strict_types=1);

function binAscii(string $binary):string {
    $result = '';

    foreach (explode(' ', $binary) as $bin) {
        $result .= chr(bindec($bin));
    }

    return $result;
}