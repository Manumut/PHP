<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cadena = "Holasoyaguayoyso.loseprogramar123";
        echo $cadena;
        echo "<br>";

        if (preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`", $cadena)) {
            echo "Funciona";
        }else
            echo "No funciona";

        echo "<br>";

        if (preg_match("`[A-Z]`", $cadena) && preg_match("`[a-z]`", $cadena) && preg_match("`[0-9]`", $cadena) && preg_match("`[^a-zA-Z0-9]`", $cadena)) {
            echo "Funciona";
        }else
            echo "No funciona";
        
        echo "<br>";
        $correo = "aguayo.programa2@gmail.com";
        echo $correo;
        echo "<br>";

        if (preg_match("`^[a-z]([a-z0-9]|[^a-zA-Z0-9]?)+@[a-z]+\.(com|es)`", $correo)) {
            echo "Funciona";
        }else
            echo "No funciona";
    
    ?>
</body>
</html>