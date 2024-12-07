<?php

// this is probably stream of bits
$str = "01000011010101000100011001111011010000100110100101110100010111110100011001101100011010010111000001110000011010010110111001111101";

// nice formating ;)
echo "\n\t";

// split string into chunks of 8 bits = 1 byte
foreach (str_split($str, 8) as $_ => $bin) {
        // decode byte to decimal number
        $num = bindec($bin);
        // generate single character for each byte
        $chr = chr($num);
        echo $chr;
}
echo "\n\n";
