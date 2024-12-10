<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="num">Indica un número</label><br>
        <input type="number" name="num"><br>
        <label for="img">Introduce una imagen</label>
        <input type="file" name="img">
        <input type="submit" name="env" value="Enviar">
    </form>
<?php
    if(isset($_POST["env"])){

        //COMPROBAR QUE ES UNA IMAGEN
        echo $_FILES["img"]["type"];

        if(strstr($_FILES["img"]["type"],"image")){
            echo "correcto";
            //COPROBAR QUE NO SUPERA LOS 2MB
            $peso=$_FILES["img"]["size"]/(2**20);
            if($peso<2){
                //SE GUARDA LA IMAGEN
                $ruta="./carpetaEj4/";
                if(!file_exists($ruta)){
                    mkdir($ruta);
                }

                //NO HAY QUE SACAR LA EXT PQ NO NOS PIDE CAMBIAR EL NOMBRE

                $origen=$_FILES["img"]["tmp_name"];
                $destino=$ruta.$_FILES["img"]["name"];

                move_uploaded_file($origen,$destino);

                //TABLA
                echo "<table>";
                    for($i=0;$i<$_POST["num"];$i++){
                        if($i%3==0){
                            echo "<tr>";
                        }

                        echo "<td><img src=$destino></td>";
                        
                        if($i%3==2){
                            echo "</tr>";
                        }

                    }

                    if($_POST["num"]%3!==0){ //CERRAR CUANDO SEA IMPAR
                        echo "</tr>";
                    }
                echo "</table>";
            }else{
                echo "Supera los 2 mb";
            }
        }else{
            echo "incorrecto";
        }

    }else{

    }
?>
</body>
</html>