<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ej1</h2>
    <p>------------</p>
    <?php
        echo "<table>";
        
        $array[] = mt_rand(0,1000);
        $mayor=$array[0];
        $menor=$array[0];

        echo $array[0];
        if ($array[0]%2 == 0) $pares = $pares.$array[0];
        else($impares = $impares.$array[0]);

        for ($i=1; $i < 12; $i++) { 
            $array[]= mt_rand(0,1000);

            if($mayor < $array[$i]){
                $mayor = $array[$i];
            }
            if($menor > $array[$i]){
                $menor = $array[$i];
            }

            if ($array[$i]%2 == 0) $pares = $pares."-".$array[$i];
            else($impares = $impares."-".$array[$i]);
        }

            $inver = array_reverse($array);
            $arrayAux = $array;
             sort($arrayAux);
 
        echo "<tr><td>Vector original</td><td>";
        for ($i=0; $i < 12; $i++) { 
            echo $array[$i]."-";
        }
        echo "</td></tr>";
        echo "<tr><td>Mayor</td><td>$mayor</td></tr>";
        echo "<tr><td>Menor</td><td>$menor</td></tr>";
        echo "<tr><td>Vector inverso</td><td>";
        foreach ($inver as $valor) {
            echo $valor;
        }
        
        echo "</td></tr>";
        echo "<tr><td>Vector ordenado</td><td>";
        foreach ($arrayAux as $valor) {
            echo $valor;
        }
        echo "</td></tr>";
        echo "<tr><td>Pares</td><td>$pares</td></tr>";
        echo "<tr><td>Impares</td><td>$impares</td></tr>";

        echo "</table>";
    ?>


    
    <h2>Ej2</h2>
    <p>-----------</p>

    <?php
        echo "<table>";
        $array["WiiSports" => 82900000, "Skyrim" => 60000000, "GTAV"=>200000000, "MarioKart8"=>70430000, "Tetris"=>100000000, "RDR2"=>63000000, "Minecraft"=>300000000];



        
        echo "</table>";

    ?>
</body>
</html>