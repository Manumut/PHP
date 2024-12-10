<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if(isset($_POST["enviar"])){
        function corregir_primera_letra($palabra){
            $letra = $palabra[0];
            echo $letra;
        }
        $palabra = $_POST["text"];
        


    }
    ?>

    <form action="">
        <input type="text" name="text" placeholder="escriba">
        <input type="submit" name="enviar" value="enviar">
    </form>
    
</body>
</html>