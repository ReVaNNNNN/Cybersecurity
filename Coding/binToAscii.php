<?php

declare(strict_types=1);

$binary = '01000110 01101001 01101110 01100001 01101100 00100000 01000100 01100101 01100011';
$result = '';

foreach (explode(' ', $binary) as $bin) {
    $result .= chr(bindec($bin));
}

echo $result;