<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["env"])){
            //COMPROBAR SI EL ARCHIVO ES PDF
            $nombre=$_FILES["cv"]["name"];
            
            $tipo=explode(".",$nombre);
            $tipoFinal=end($tipo);
            if($tipoFinal=="pdf"){
                //COMPROBAR PESO DEL ARCHIVO
                $peso=$_FILES["cv"]["size"]/(2**20);
                if($peso<2){
                    //GUARDAR EL ARCHIVO
                    $ruta="./carpetaEj2/";

                    if(!file_exists($ruta)){
                        mkdir($ruta);
                    }

                    //ANTES DE GUARDAR HAY QUE SACAR LA EXT
                    //La extensión ya está en $tipoFinal

                    $origen=$_FILES["cv"]["tmp_name"];
                    $destino;

                    if(!preg_match("'^.*\.[a-zA-Z]+$'",$_POST["dni"])){
                        $destino=$ruta.$_POST["dni"].".".$tipoFinal;
                    }

                    move_uploaded_file($origen,$destino);
                }else{
                    echo "Error. El archivo pesa más de 2MB";
                }
            }else{
                echo "Error, el archivo no es PDF";
            }
        }else{
            echo '
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="dni">Introduce tu dni</label>
                    <input type="text" name="dni">
                    <label for="cv">Introduce tu curriculum</label>
                    <input type="file" name="cv">
                    <input type="submit" name="env" value="Enviar">
                </form>
            ';
        }
    ?>
</body>
</html>