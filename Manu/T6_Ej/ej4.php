<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ejercicio 4
        $nums=$_POST;
        echo "<table>";
            foreach ($nums as  $value) {
                echo "<tr><td>Valor 1</td><td>$value</td></tr>";
            }
            echo "<tr><td>Valor 1 + valor 2</td><td>".$_POST['num1']+$_POST['num2']."</td></tr>";
            echo "<tr><td>Valor 2 * valor 3</td><td>".$_POST['num2']+$_POST['num3']."</td></tr>";
            echo "<tr><td>Valor 1 / valor 3</td><td>".$_POST['num1']/$_POST['num3']."</td></tr>";
            echo "<tr><td>Valor 1 + valor 2 + valor 3</td><td>".$_POST['num1']+$_POST['num2']+$_POST['num3']."</td></tr>";
            echo "<tr><td>(Valor 2 + valor 3)/valor1</td><td>".($_POST['num2']+$_POST['num3'])/$_POST['num1']."</td></tr>";
            echo "</table>";
    ?>
</body>
</html>