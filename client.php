<?php

require_once "Coding/hexToAscii.php";
require_once "Coding/binToAscii.php";
require_once "Coding/base64decode.php";
require_once "Coding/base64encode.php";
require_once "Coding/caesarCipher.php";

echo hexAscii("506C616E74207472656573");
echo PHP_EOL;
echo binAscii("01000110 01101001 01101110 01100001 01101100 00100000 01000100 01100101 01100011");
echo PHP_EOL;
echo base64decode("a290ZWN6ZWsgaSBtbG90ZWN6ZWs");
echo PHP_EOL;
echo base64encode("koteczek i mloteczek");
echo PHP_EOL;
//caesarCipher("2m{y!\"%w2'z{&o2UfX~ws%!._s+{ (&@Vwu{ (&@_w%{v{(&0", -100, 100);

