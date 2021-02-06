<?php

/*
Kod został opublikowany na licencji JSTMCS (Jeśli Skopiujesz To Mogę Cię Sprzedać).
Nie biorę odpowiedzialności za jedynki za zadanie.
Igor Święs
*/

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
if (isset($a) && isset($b) && isset($c)) {
    $a = (float)$a;
    $b = (float)$b;
    $c = (float)$c;
    echo "x₀ ∈ ";
    if (!$a) {
        if (!$b) {
            die($c ? "∅" : "ℝ");
        }
        die("{" . (-$c / $b ?: 0) . "}");
    }
    $a2 = 2 * $a;
    $a4 = 4 * $a;
    $delta = $b * $b - $a4 * $c;
    $p = -$b / $a2 ?: 0;
    $q = -$delta / $a4 ?: 0;
    if ($delta < 0) {
        echo "∅";
    } else {
        $offset = sqrt($delta) / $a2;
        echo "{" . ($p - $offset ?: 0);
        if ($delta) {
            echo ", " . ($p + $offset);
        }
        echo "}";
    }
    die("<br>W($p, $q)");
}
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kalkulator funkcji kwadratowych</title>
        <style>
            #form > input {
                width: 3em; 
            }

            #output {
                display: block;
            }
        </style>
    </head>
    <body>
        <form id="form">
            <input id="a" type="number" placeholder="a" required step="any">
            <label for="a">x² + </label>
            <input id="b" type="number" placeholder="b" required step="any">
            <label for="b">x + </label>
            <input id="c" type="number" placeholder="c" required step="any">
            <label for="c"> = 0</label>
            <button type="submit">Oblicz</button>
            <output id="output"></output>
        </form>
        <script>
            const [form, a, b, c, output] = ['form', 'a', 'b', 'c', 'output'].map(id => document.getElementById(id));
            form.addEventListener('submit', async event => {
                event.preventDefault();
                output.innerHTML = await (await fetch(`?a=${a.value}&b=${b.value}&c=${c.value}`)).text();
            });
        </script>
    </body>
</html>
