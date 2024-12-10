<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "EJERCICIO 1<br>";
    $cadena1 ="Mi mama me mima";
    $cadena2 = " Quiero mucho a mi mama";
    $cadena = [$cadena1, $cadena2];

    $cadena = implode(" ", $cadena);
    echo $cadena;
    echo "<br>la cadena \"$cadena1\" se repite: ";
    $c1min = strtolower($cadena1);
    $arr =count_chars($c1min,0);

    foreach ($arr as $letra => $rep) {
       $let = chr($letra);
       if($let >= 'a' && $let <= 'z') echo "$let : $rep; ";
    }
    echo "<br>";
    echo "<br>la cadena \"$cadena2\" se repite: ";
    $c2min = strtolower($cadena2);
    $arr =count_chars($c2min,0);

    foreach ($arr as $letra => $rep) {
       $let = chr($letra);
       if($let >= 'a' && $let <= 'z') echo "$let : $rep; ";
    }
    echo "<br>";
    echo "<br>la cadena \"$cadena\" se repite: ";
    $cmin = strtolower($cadena);
    $arr =count_chars($cmin,0);

    foreach ($arr as $letra => $rep) {
       $let = chr($letra);
       if($let >= 'a' && $let <= 'z') echo "$let : $rep; ";
    }

    echo "<br><br>EJERCICIO 2<br>";

    echo "<table>";
        echo "<tr><th>Usuario</th>";
            $Usuarios =["Juan!ca","Aguayo","Maite","Manu"];
            foreach ($Usuarios as $corre) {
                echo "<tr><td>$corre</td>";
                if (preg_match("`[&!\?\*]`",$corre)) {
                    echo "<td>Incorrecto</td>";
                }else {
                    echo "<td>Correcto</td>";
                }
                echo "</tr>";

                };
    echo "</table>";

    
    echo "<br>EJERCICIO 3<br>";

    $usrs[] = ["Erica", "erIca"];
    $usrs[] = ["M&anue!", "6544d65ae4d65ew4"];
    $usrs[] = ["Maite", "serg54dgdt654$&huf"];



    echo "<table>";
        echo "<tr><th>Usuario</th><th>Contraseña</th>";
            foreach ($usrs as $usrPssw) {
                echo "<tr><th>".$usrPssw[0]."</th>";
                $nCar = strlen($usrPssw[1]);
                $nContr = str_pad("",$nCar,"*");
                echo "<td>$nContr</td>";

                $usrMin = strtolower($usrPssw[0]);
                $contMin = strtolower($usrPssw[1]);

                if (substr_count($contMin, $usrMin) == 0) echo "<td>Correcto</td>";
                else echo "<td>Incorrecto</td>";

                echo "</tr>";

            };
    echo "</table>";

    echo "<br>EJERCICIO 4<br>";
    $cod = "Ipmb rvfsjep bnjhp. Dpnp uf fñdvfñusbt. Uf nbñep nvdipt cftpt. Ibtub qspñup.";
    $CambioCod = strtr($cod,"abcdefghijklmnñopqrstuvwxiz","bcdefghijklmnñopqrstuvwxyza");
            echo $CambioCod;









    ?>
</body>
</html>