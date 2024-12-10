<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        if(isset($_POST["Enviar"])){
            $cadena = $_POST["cad"];
            $char = $_POST["car"];
            $vacio = trim($cadena);
            echo $vacio."<br>";
            $aparicion = substr_count($cadena, $char);
            echo $aparicion;
            
        }else{

    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="cad" placeholder="Escriba una cadena de texto">
        <br>
        <input type="text" name="car" placeholder="Introduzca un caracter">
        <br>
        <select name="lado">
            <option value="">Izquierda</option>
            <option value="">Derecha</option>
            <option value="">Ambos</option>
        </select>
        <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>




    <?php } ?>
</body>
</html>