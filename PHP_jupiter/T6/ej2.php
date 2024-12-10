<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tipo = $_FILES["cv"]["type"];

        if(strstr($tipo, "pdf") != ""){
            $tam = $_FILES["cv"]["size"] / 2**20;

            if($tam <= 2){
                $ruta = "./cvs/";

                if(!file_exists($ruta)) mkdir($ruta);

                $origen = $_FILES["cv"]["tmp_name"];
                $destino = $ruta.$_POST["DNI"].".pdf";

                move_uploaded_file($origen, $destino);

                header("Location: ej2Form.php?acc=1");
            }else{
                header("Location: ej2Form.php?err=2");
            }
        } else{
            header("Location: ej2Form.php?err=1");
        }
    ?>
</body>
</html>