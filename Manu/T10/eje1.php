<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "class.conexion.php";

        $bd = new mysqli('localhost','root', '', 'ejercicio_5');

        $bd->set_charset("utf8");

        $cli = new Cliente($bd);

        $cli->get_datos();
    ?>
</body>
</html>