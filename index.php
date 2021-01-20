<?php
if (isset($_GET["number"])) {
    switch ($_GET["number"]) {
        case 0:
            echo "<script>alert('Nie może być 0.\\nBeka z ciebie.')</script>";
            break;
        case 1:
            for ($i = 1; $i <= 10; ++$i) {
                echo $i . "<br>";
            }
            break;
        case 2:
            $i = 2;
            while ($i <= 10) {
                echo $i++ . "<br>";
            }
            break;
        case 3:
            $i = 3;
            do {
                echo $i++ . "<br>";
            } while($i <= 10);
    }
    die;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruh</title>
</head>
<body>
    <script>
        fetch(`?number=${prompt("Podaj liczbę z zakresu 0-3")}`).then(response => response.text()).then(text => document.write(text));
    </script>
</body>
</html>