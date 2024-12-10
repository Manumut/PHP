<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<table>";
    foreach ($_POST as $asig => $nota) {
        echo"<tr>";
        echo "<td> $asig </td>";

        if($asig == "Alumno"){
            echo "<td> $nota</td>";
        }else{
            echo "<td>";
            if($nota < 5) echo "Insuficiente";
            elseif($nota < 7) echo "Suficiente";
            elseif($nota < 9) echo "Notable";
            else echo "Soobresaliente";

            echo "</td>";
        }
        echo"</tr>";
    }
    echo "</table>";


    ?>
</body>
</html>