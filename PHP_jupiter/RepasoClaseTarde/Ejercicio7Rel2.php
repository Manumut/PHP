<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepasoRel2</title>
</head>
<body>

   <?php

   if(isset($_POST["env"])){
   $carpetaUsu="usuarios";
        if(!file_exists($carpetaUsu)){//Si no existe, se crea la carpeta global usuarios
            mkdir($carpetaUsu);
        }

    $usuario=$carpetaUsu."/".$_POST["usu"];
        if(!file_exists($usuario)){//Dentro de usuarios, si la carpeta con el nom del usuario no existe, se crea
            mkdir($usuario);
        }


        //NO HARÍA FALTA PORQUE NO NOS ESTÁ PIDIENDO CAMBIAR EL NOMBRE DEL ARCHIVO, ENTONCES YA TODOS LOS ARCHIVOS LLEVAN INCLUIDA LA EXTENSIÓN
        //Sacar la extensión del archivo
        // $arr=explode(".",$_FILES["doc"]["name"]);
        // $ext=end($arr);


        // $destino;
        // if(preg_match("'^.*\.[a-zA-Z]+'",$_FILES["doc"]["name"])){//Si el nombre ya tiene la extensión no se concatena
        //     $destino=$usuario."/".$_FILES["doc"]["name"];
        // }else{//Si no tiene la ext se concatena
        //     $destino=$usuario."/".$_FILES["doc"]["name"].".".$ext;
        // }


        $origen=$_FILES["doc"]["tmp_name"];
        $destino=$usuario."/".$_FILES["doc"]["name"];

        


        //MOSTRAR MENSAJE DE VERIFICACIÓN
        $ubi="Ejercicio7Rel2.php";

        if(move_uploaded_file($origen,$destino)){
            // echo "Archivo subido correctamente";
            header("Location: $ubi?ver=1");
        }else{
            header("Location: $ubi?ver=2");
        }


   }else{

    if (isset($_GET["ver"])) {
        if($_GET["ver"] == 1) echo "Archivo subido correctamente";
        if($_GET["ver"] == 2) echo "Error al subir archivo";
    }

    echo '
        <form action="#" method="post" enctype="multipart/form-data">
        <label for="usu">Indica tu nombre de usuario</label><br>
        <input type="text" name="usu"><br>
        <label for="doc">Sube un documento</label><br>
        <input type="file" name="doc"><br>
        <input type="submit" name="env" value="Enviar">
    </form>
    ';
   }
   ?> 
</body>
</html>