<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Ejercicio 7
        $num=$_POST['num1'];
        $cont=0;
        for ($i=1; $i <= $num ; $i++) { 
            if($num%$i ==0)$cont++;
        }
        if($cont <=2)echo "El numero es primo";
        else echo "no lo es";

    ?>
</body>
</html>