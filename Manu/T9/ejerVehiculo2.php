<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function comprueba(){
        $tipo1 = $_POST["tipo1"];
        $peso1 = $_POST["peso1"];

        $tipo2 = $_POST["tipo2"];
        $peso2 = $_POST["peso2"];

        $respuesta = "";

        if($tipo1 == $tipo2){
            if($peso1 > $peso2){
                 $respuesta = "El vehiculo mas pesado es $tipo1";
            }elseif($peso1 < $peso2){
                $respuesta = "El vehiculo mas pesado es $tipo2";
            }else{
                $respuesta = "Pesan lo mismo";
            }
        }else{
            $respuesta = "No son el mismo tipo";
        }

        return $respuesta;
    }


    if(isset($_POST["Enviar"])){
        comprueba();

    }else{
        ?>
        <form action="#" method="post" enctype="multipart/form-data">

            <select name="tipo1">
                <option value="C">Camion</option>
                <option value="M">Moto</option>
                <option value="T">Turismo</option>
            </select>
            <input type="text" name="peso1" placeholder="Peso del vehiculo 1">
           
            <br><br><br>
             
            <select name="tipo2">
                <option value="C">Camion</option>
                <option value="M">Moto</option>
                <option value="T">Turismo</option>
            </select>
            <input type="text" name="peso2" placeholder="Peso del vehiculo 2">
            <br>
            <input type="submit" name="Enviar" value="Enviar">
            </form>
    
    
        <?php } ?>
</body>
</html>
