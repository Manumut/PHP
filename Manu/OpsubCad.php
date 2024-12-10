<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Implementa un script en PHP en el que, dado un array de
            cadenas de caracteres, se reemplace una subcadena por
            otra indicada y se muestre, en una tabla; la cadena
            original, la cadena nueva y el número de veces que se ha
            hecho la sustitución, de cada una de las posiciones del
            array.
            </p>";
        $frases = ["soy una mesa", "Samosas sabrosas", "casa bonita"];
        $replace ="pa";
        echo"<table>";
        echo "<tr><th>Original</th><th>Resultado</th><th>Apariciones</th></tr>";
        foreach ($frases as $cad) {
            $new =str_replace("sa", $replace, $cad);
            $veces = substr_count($new, $replace);
            echo "<td>$cad</td><td>$new</td><td>$veces</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>