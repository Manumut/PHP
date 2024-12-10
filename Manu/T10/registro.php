<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
   


    <?php
    $bd= new mysqli('Localhost','root','','usuarios');

    if (isset($_POST["enviar"])) {

        $contrasenia = $_POST['psw'];
        $confirmar_contrasenia = $_POST['psw2'];

        if (strlen($contrasenia) < 8 || strlen($contrasenia) > 20) {
            echo "La contraseña debe tener entre 8 y 20 caracteres.";
        } elseif ($contrasenia !== $confirmar_contrasenia) {
            echo "Las contraseñas no coinciden.";
        } else {
            echo "La contraseña es válida.";
        }
    }else
    {
        ?>
        <form action="#" method="POST">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" name="nombre"><br><br>

        <label for="psw">Contraseña:</label><br>
        <input type="text" name="psw"><br><br>

        <label for="psw2">Introduzca la contraseña otra vez:</label><br>
        <input type="text"  name="psw2"><br><br>

        <input type="submit" value="enviar" name="enviar"></input>
    </form>
    <?php } 
?>

</body>
</html>


