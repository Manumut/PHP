<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bd = new mysqli('localhost','root', '', 'centro');

        $sentencia = "SELECT a.*, asi.nombre FROM alumnos a, matriculas m, asignaturas asi WHERE m.codigo=? AND anio=? AND a.dni=m.dni AND m.codigo=asi.codigo;";

        $consulta = $bd->prepare($sentencia);

        $cod = 1;
        $anio=2020;

        $consulta->bind_param("ii", $cod, $anio);
        $consulta->bind_result($dni, $nom, $edad, $nomAsig);
        $consulta->execute();

        while($consulta->fetch()){
            echo "El alumno $nom con DNI: $dni y edad $edad, se matriclo en la asignatura $nomAsig en 2020<br>";
        }

        $consulta->close();

        $bd->close();

    ?>
</body>
</html>