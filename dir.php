<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
    body {
        background: #333;
        color: white;
        font-family: "Lato", sans-serif;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        background: #373737;
        border-radius: 1em;
        overflow: hidden;
    }

    tr:nth-child(even) {
        background: #3e3e3e;
    }

    td, th {
        padding: 0.69em;
    }

    td:not(:first-child) {
        border-left: 1px solid hsla(266, 85%, 62%, 0.5);
    }

    th {
        background-color: hsl(266, 85%, 62%);
        font-weight: 400;
        text-transform: uppercase;
    }
    </style>
</head>
<body>
<?php

function scan($dir) {
    if (!($all = @scandir($dir))) {
        echo "<p>Nie udało się znaleźć katalogu o nazwie $dir</p>";
        return;
    }
    $dirs = [];
    $files = [];

    for ($i = 2; $i < count($all); ++$i) {
        if (is_dir("$dir/$all[$i]")) {
            $dirs[] = $all[$i];
        } else {
            $files[] = $all[$i];
        }
    }

    echo "<table><tr><th>Katalogi</th><th>Pliki</th></tr>";

    for ($i = 0; $i < count($dirs) || $i < count($files); ++$i) {
        echo "<tr><td>";
        if ($i < count($dirs)) {
            echo $dirs[$i];
        }
        echo "<td>";
        if ($i < count($files)) {
            echo $files[$i];
        }
        echo "</td></tr>";
    }

    echo "</table>";
}

scan("test");

?>
</body>
</html>