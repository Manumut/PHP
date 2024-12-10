<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        function contar_letra_a(&$palabra){
            $cont = 0;
            $tope = strlen($palabra);
            for($i = 0; $i < $tope; $i++){
                if($palabra[$i]== 'a') 
                $cont++;
            }
            return $cont;
        }
        
        if(isset($_POST["enviar"])){
            echo "La cadena tiene ".contar_letra_a($_POST["text"])." aes";
            

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