<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ejercicio 5
        echo "<table>";
            for ($i=$_POST['num1']; $i <= $_POST['num2'] ; $i++) { 
                echo "<tr><td>$i</td></tr>";
            }
        echo "</table>";
    ?>
</body>
</html>