<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($_FILES["archivo1"] as $key => $value){
            echo "$key: $value<br>";
        }
        $ruta = './archivos';
        if(!file_exists($ruta)){
            echo ' la carpeta no existe, creandola..';
            mkdir($ruta);
        }
        $origen = $_FILES["archivo1"]["tmp_name"];
        $destino = $ruta.$_FILES["archivo1"]["name"];
        move_uploaded_file($origen, $destino);
    ?>
</body>
</html>