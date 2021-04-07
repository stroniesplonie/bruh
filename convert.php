<?php

/*
Kod został opublikowany na licencji HWDP.
Nie biorę odpowiedzialności za jedynki za zadanie.
Filip Ibisz
*/

function toString(int $input, int $base) {
    if ($base < 2) die("Base must be at least 2");
    $negative = $input < 0;
    $result = "";
    do {
        $digit = abs($input) % $base;
        $result = chr($digit + ($digit > 9 ? 87 : 48)) . $result;
    } while ($input = intdiv($input, $base));
    return ($negative ? "-" : "") . $result;
}

?>
