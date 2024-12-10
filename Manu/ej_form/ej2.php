<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $curVit = $_FILES["CV"]["type"];
    $curVit = explode("/", $curVit)[1];
    
    if(strcmp($curVit, "pdf") == 0 ){
        $tam = $_FILES["CV"]["size"] / 2**20;
        if($tam <= 2){
            $ruta = "./cvs/";

            if(!file_exists($ruta)) mkdir($ruta);

            $origen = $_FILES["CV"]["tmp_names"];
            $destino = $ruta.$_POST["DNI"].".pdf";
            move_uploaded_file($origen, $destino);

            header("Location: ej_2.php?acc");
        }else{header("Location: ej_2.php?err=2");}
    }else{
        header("Location: ej_2.php?err=1");
    }

    ?>
</body>
</html>