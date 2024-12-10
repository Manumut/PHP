<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function corregir_primera_letra(&$palabra){
            if(preg_match("'^[a-z]'", $palabra)){
                $palabra[0] = strtoupper($palabra[0]);
            }
        }

        function corregir_mayusculas(&$palabra){
            corregir_primera_letra($palabra);
            $tope = strlen($palabra);
            for($i = 1; $i < $tope; $i++){
                if(preg_match("'[A-Z]'", $palabra[$i])) $palabra[$i] = strtolower($palabra[$i]);
            }
        }
        
        if(isset($_POST["enviar"])){
            corregir_mayusculas($_POST["text"]);
            echo $_POST["text"];
        


    }else{

    ?>

    <form action="#" method="post">
        <input type="text" name="text" placeholder="escriba">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php        
    }
    ?>
</body>
</html>