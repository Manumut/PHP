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

        if(isset($_POST["enviar"])){
            $bd = new mysqli('localhost','root', '', 'ejercicio_5');

            $bd->set_charset("utf8");
    
            $cre = new Cliente($bd, $_POST["dni"], $_POST["nombre"], $_POST["edad"], $_POST["usu"], $_POST["psw"]);
            $cre->crearUsu();

        }else{ ?>
        <form action="eje3.php" method="post" enctype="multipart/form-data">
            <input type="text" name="dni" placeholder="Dime tu DNI">
            <br>
            <br>
            <input type="text" name="nombre" placeholder="Dime tu nombre">
            <br>
            <br>
            <input type="number" name="edad" placeholder="Dime tu edad">
            <br>
            <br>
            <input type="text" name="usu" placeholder="Dime tu nombre de usuario">
            <br>
            <br>
            <input type="password" name="psw" placeholder="Ponga la contraseña">
            <br>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php } ?>

        
    
   
</body>
</html>