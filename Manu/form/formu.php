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

        if(!file_exists($ruta)){
            mkdir($ruta);
        }

        $nomOrg = $_FILES["arch1"]["name"];
        $nnom =  $_POST["nom"];
        $arr = explode(".", $nomOrg);
        $ext = end($arr);

        if(!preg_match("'^.+\.[a-z]+$'", $nnom)){
            $nnom .= ".".$ext;
        }

        $origen = $_FILES["arch1"]["tmp_name"];
        $destino = $ruta.$nnom;

        move_uploaded_file($origen, $destino);

        echo "<table> <tr><th>Nombre original</th><th>nombre nuevo</th><th>Tamaño en megas</th><th>Tipo de imagen</th></tr>";

        $tMB = $_FILES["arch1"]["size"]/(2**20);

        echo "<tr><td>$nomOrg</td><td>$nnom</td><td>$tMB</td><td>$ext</td></tr></table>";

        echo "<img src =\"$destino\">";


    ?>
</body>
</html>