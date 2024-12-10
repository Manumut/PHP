<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table>";
        $i = 0;

        $suma = 0;
        $multi = 1;
        $dvdn = 0;

        foreach($_POST as $num){
            $i++;
            echo "<tr><td>Valor $i</td><td>$num</td></tr>";
            if($i != 3) $suma += $num;
            if($i != 1){
                $multi *= $num;
                $dvdn += $num;
            } 
        }

        echo "<tr><td>".$_POST["n1"]." + ".$_POST["n2"]."</td><td>$suma</td></tr>";
        echo "<tr><td>".$_POST["n2"]." * ".$_POST["n3"]."</td><td>$multi</td></tr>";
        echo "<tr><td>".$_POST["n1"]." / ".$_POST["n3"]."</td><td>".$_POST["n1"]/$_POST["n3"]."</td></tr>";
        echo "<tr><td>".$_POST["n1"]." + ".$_POST["n2"]." + ".$_POST["n3"]."</td><td>".$suma+$_POST["n3"]."</td></tr>";
        echo "<tr><td>".$_POST["n1"]." + ".$_POST["n2"]." + ".$_POST["n3"]."</td><td>".$dvdn/$_POST["n1"]."</td></tr>";
        echo "</table>";
    ?>
</body>
</html>