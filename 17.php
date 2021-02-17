<?php

function oddCount(array $numbers) {
    $count = 0;
    foreach ($numbers as $number) {
        $count += $number & 1;
    }
    return "Nieparzystych $count<br>Parzystych " . (count($numbers) - $count);
}

function sortMixed(array $mixed, bool $descending = false) {
    $strings = [];
    $numbers = [];
    foreach ($mixed as $element) {
        if (is_string($element)) {
            $strings[] = $element;
        } else {
            $numbers[] = $element;
        }
    }
    $function = $descending ? "rsort" : "sort";
    $function($strings);
    $function($numbers);
    return array_merge($strings, $numbers);

}

?>