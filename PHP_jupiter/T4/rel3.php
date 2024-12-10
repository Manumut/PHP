<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .tVidya, .tCld{
            border: 1px solid #da0;
            border-collapse: collapse;
        }
        .tHd{
            background-color: orange;
            color: white;
        }

        .tRow:nth-child(even){background-color:#da0}

    </style>
</head>
<body>
    <?php

        $array[] = mt_rand(1,1000);
        $min = $array[0];
        $max = $min;

        $pares = "";
        $impares = "";

        echo "<table>"; 
        echo "<tr><td>Vector</td>";

        echo "<td>";

        echo $array[0];

        if($array[0]%2 == 0) $pares = $pares.$array[0];
        else $impares = $impares.$array[0];

        for($i = 1; $i < 12; $i++){
            $array[] = mt_rand(1,1000); 

            if($min > $array[$i]) $min =  $array[$i];
            if($max < $array[$i]) $max =  $array[$i];

            if($array[$i]%2 == 0) $pares = $pares."-".$array[$i];
            else $impares = $impares."-".$array[$i];

            echo "-".$array[$i];
        }

        $arrayInv = array_reverse($array);
        
        $arraySort = $array;
        sort($arraySort);

        echo "</td></tr>";

        echo "<tr><td>Mayor</td><td>$max</td></tr>";

        echo "<tr><td>Menor</td><td>$min</td></tr>";

        echo "<tr><td>Vector inverso</td><td>";

        foreach($arrayInv as $valor) echo $valor."-";

        echo "</td></tr>";

        echo "<tr><td>Vector ordenado</td><td>";

        foreach($arraySort as $valor) echo $valor."-";

        echo "</td></tr>";

        echo "<tr><td>Pares</td><td>$pares</td></tr>";

        echo "<tr><td>Impares</td><td>$impares</td></tr>";

        echo "</table>";
        
        echo "<br><br>";

        $video = array("WiiSports" => 82900000, "Skyrim" => 60000000, "GTAV" => 200000000, "MarioKart8" => 70430000, "Tetris" => 100000000, "RDR2" => 63000000, "Minecraft" => 300000000);

        echo "<table class=\"tVidya\">";

        echo "<tr class=\"tRow\"><th class=\"tHd\">Videojuego</th><th class=\"tHd\">Ventas</th></tr>";

        foreach($video as $clave => $valor){
            echo "<tr class=\"tRow\"><td class=\"tCld\">$clave</td><td class=\"tCld\">$valor</td></tr>";
        }

        echo "</table>";
        
        krsort($video);

        echo "<br><br>";

        echo "<table class=\"tVidya\">";

        echo "<tr class=\"tRow\"><th class=\"tHd\">Videojuego</th><th class=\"tHd\">Ventas</th></tr>";

        foreach($video as $clave => $valor){
            echo "<tr class=\"tRow\"><td class=\"tCld\">$clave</td><td class=\"tCld\">$valor</td></tr>";
        }

        echo "</table>";

        echo "<br><br>";

        arsort($video);

        echo "<table class=\"tVidya\">";

        echo "<tr class=\"tRow\"><th class=\"tHd\">Videojuego</th><th class=\"tHd\">Ventas</th></tr>";

        foreach($video as $clave => $valor){
            echo "<tr class=\"tRow\"><td class=\"tCld\">$clave</td><td class=\"tCld\">$valor</td></tr>";
        }

        echo "</table>";

        reset($video);

        echo "<br> El videojuego más vendido es ".key($video)." con ".current($video)." ventas.";

        end($video);

        echo "<br> El videojuego menos vendido es ".key($video)." con ".current($video)." ventas.";

    ?>
</body>
</html>