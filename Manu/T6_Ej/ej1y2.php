<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ejercicio 1 y 2
         $num=$_POST["num"];
        for ($i=0; $i <= 10 ; $i++) { 
            echo "Potencia de $num ^ $i = ".$num**$i."<br>";
        }
        for ($i=1; $i <=10 ; $i++) { 
            echo "$num x $i = ".$num*$i."<br>";
        }
    ?>
</body>
</html>