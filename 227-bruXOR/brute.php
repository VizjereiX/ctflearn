<?php

$encoded = "q{vpln'bH_varHuebcrqxetrHOXEj";

// let's assume that flag is starting with "flag" -> so first character is "f"
// we need to grab it's asii code and format is a binary
$numKey = ord("f");
$binKey = str_pad(decbin($numKey), 8, "0", STR_PAD_LEFT);

// get binary representation of first charcter of encoded message
$numEnc = ord($encoded[0]);
$binEnc = str_pad(decbin($numEnc), 8, "0", STR_PAD_LEFT);

// calculate xor of a number (PHP can do only XOR of bits)
// and save also binary representation - we need it later
$key = 0;
$binGuessedKey = "";

for ($j = 0; $j<8; $j++) {

        $bin = $binEnc[$j] == $binKey[$j] ? 0 : 1;
        $key = 2 * $key + ($bin);
        $binGuessedKey .= $bin;
}
// and this value is our guessed key
// $binKey = str_pad($binKey, 8, "0", STR_PAD_LEFT);
$flag = "";

// for each letter in cryptogram XOR it with gueesed "key"
for ($i = 0; $i< strlen($encoded); $i++) {
    $numEnc = ord($encoded[$i]);
    $binEnc = str_pad(decbin($numEnc), 8, "0", STR_PAD_LEFT);

    $val = 0;
    for ($j = 0; $j<8; $j++) {
      $val = 2 * $val + ($binEnc[$j] xor $binGuessedKey[$j]);
    }

    $flag .= chr($val);
}
echo "\t", $flag, "\n";