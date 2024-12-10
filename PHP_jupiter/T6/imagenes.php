<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tipo1 = $_FILES["img1"]["type"];
        $tipo2 = $_FILES["img2"]["type"];

        $tipo1 = explode("/", $tipo1)[0]; //image/png
        $tipo2 = explode("/", $tipo2)[0];

        if(strcmp($tipo1, "image") == 0 && strcmp($tipo1, $tipo2) == 0){
            $tam1 = $_FILES["img1"]["size"] / 2**20;
            $tam2 = $_FILES["img2"]["size"] / 2**20;

            if($tam1 <= 2 && $tam2 <= 2){
                $nom1 = $_FILES["img1"]["name"];
                $nom2 = $_FILES["img2"]["name"];

                $mayor = $nom1;
                $menor = $nom2;

                if($tam1 < $tam2){
                    $menor = $mayor;
                    $mayor = $nom2;
                }

                $ruta = "./archivos/";

                if(!file_exists($ruta)) mkdir($ruta);

                $origen1 = $_FILES["img1"]["tmp_name"];
                $origen2 = $_FILES["img2"]["tmp_name"];

                move_uploaded_file($origen1, $ruta.$nom1);
                move_uploaded_file($origen2, $ruta.$nom2);

                echo '<img src="'.$ruta.$mayor.'"><br>';
                echo '<img src="'.$ruta.$menor.'"><br>';

            }
        }
    ?>
</body>
</html>