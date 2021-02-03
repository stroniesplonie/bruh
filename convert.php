<?php

/*
Kod został opublikowany na licencji JSTMCS (Jeśli Skopiujesz To Mogę Cię Sprzedać).
Nie biorę odpowiedzialności za jedynki za zadanie.
Vecchia Volpe

ujeb.se/volper
*/

function toString(int $input, int $base) {
    if ($base < 2) die("Base must be at least 2");
    $negative = $input < 0;
    $input = abs($input);
    $result = "";
    do {
        $digit = $input % $base;
        if ($digit > 9) {
            $digit = chr($digit + 87);
        }
        $result .= $digit;
    } while ($input = intdiv($input, $base));
    if ($negative) $result .= "-";
    return strrev($result);
}

?>
