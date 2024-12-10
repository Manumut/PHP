<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = ["p1"=>"hola","p2"=>"adios","p3"=>"mori","p4"=>"porfa"];
        $keys = array_keys($array);
        $cont = count($array);

        echo "<table>";
        for($i=0;$i<$cont;$i++){
            echo "<tr><td>$keys[$i]</td><td>".$array[$keys[$i]]."</td></tr>";
        }
        echo"</table>";
       
        echo "<br>";
       
        echo "<table>";
        $i=0;
        while($i<$cont){
            echo "<tr><td>$keys[$i]</td><td>".$array[$keys[$i]]."</td></tr>";
            $i++;
        }
        echo"</table>";
       
        echo "<br>";
        echo "<table>";
        
        foreach ($array as $clave => $value) {
            echo "<tr><td>$clave</td><td>".$value."</td></tr>";
        }
        echo"</table>";




    ?>
</body>
</html>