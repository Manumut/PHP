<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "El nombre de usuario es ".$_POST["nameUsu"],"<br>";
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        echo "La suma es ".($n1+$n2)."<br>";
        echo "La resta es ".($n1-$n2)."<br>";
        echo "La multiplicacion es ".($n1*$n2)."<br>";
        if($n2 == 0) echo "No se puede hacer la division";
        else echo "La divison es: ".($n1/$n2);



    ?>
    
</body>
</html>