<?php

declare(strict_types=1);

$hex = '';
$result = '';

foreach (str_split($hex, 2) as $sign) {
    $result .= chr(hexdec($sign));
}

echo $result;