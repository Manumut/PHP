<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="dni">Introduce tu dni:</label><br>
        <input type="text" name="dni"><br>
        <label for="cv">Introduce tu cv:</label>
        <input type="file" name="cv"><br>
        <input type="submit" name="env" value="Enviar">
    </form>

    <?php
        if(isset($_POST["env"])){
            $tipo=explode(".",$_FILES["cv"]["name"]); // echo $_FILES["cv"]["type"]; También se puede hacer con esto
            $arr=end($tipo);

            $pesoMb=$_FILES["cv"]["size"]/(2**20);

            if($arr=="pdf"){
                if($pesoMb<2){
                    echo "correcto<br>";
                    
                    $ruta="./curriculums";
                    if(!file_exists($ruta)){
                        mkdir($ruta);
                    }

                    //No hace falta sacar la extensión pq ya sabemos que es un pdf sí o sí

                    $origen=$_FILES["cv"]["tmp_name"];
                    $destino=$ruta."/".$_POST["dni"]."."."pdf";

                    move_uploaded_file($origen,$destino);
                }else{
                    echo "El archivo supera los 2mb de peso";
                }
            }else{
                echo "Error, el archivo no es PDF";
            }

        }
    ?>
</body>
</html>