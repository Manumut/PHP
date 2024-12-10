<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     //Ejercicio 6
        if($_POST['edad'] >=18) echo "El usuario ". $_POST['nombre'] ."es mayor de edad";
        else echo "El usuario ". $_POST['nombre'] ."es menor de edad";
    ?>
</body>
</html>