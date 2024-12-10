<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ruta = "./archivos/"; 
        $fich = scandir($ruta);

        foreach ($fich as $archs){
            if(strcmp($archs, ".") != 0 && strcmp($archs, "..") != 0){
                echo "<p> $archs   ";

                echo "<a href=\"descarga.php?file=".urlencode($ruta.$archs)."\">Descarga</a></p>";
            } 
        }
    ?>
</body>
</html>