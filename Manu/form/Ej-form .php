<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ruta = "./imagenes/";
        if(!files_exists($ruta)){
            echo "No existe el direcvtorio, creadno...";
            mkdir($ruta);
        }

        $origen = $_FILES["img"]["tmp_name"];

        $nnom = $_POST["nom"];
        $nomOrg = $_FILES["img"]["name"];

        if(preg_match("'^[a-zA-Z0-9]+\.[a-z]+$'", $nnom)){
            $nnom = $nnom.substr($nomOrg, ".");
        }

        $destino = $ruta.$nomOrg;

        move_uploaded_file($origen, $destino);
        $_FILES["img"]["name"]
        $nnom
        $_FILES["img"]["size"]/(2**20)
        $_FILES["img"]["type"]

    ?>
    
</body>
</html>