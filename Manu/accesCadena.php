<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table><tr>";
        $carc = "Soy una cadena de caracteres ";

        $cad = strlen($carc);

        for ($i=0; $i < $cad ; $i++) { 
            echo "<th>$i</th>";
        }
        echo "</tr><tr>";
        for ($i=0; $i < $cad; $i++) { 
            echo "<td>$carc[$i]</td>";
        }




        echo"</tr></table>";
    ?>
</body>
</html>