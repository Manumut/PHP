<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .corr{background-color: #42ff33}
        .err{background-color: #f91a13}

        .cr{background-color:#f91a13}
        .chb{background-color:#42ff33}
        .caba{background-color:#003095}
        .cnum{background-color:#FFFF00}
        .cbl{background-color:#FFFFFF}

    </style>
</head>
<body>
    <?php
        echo "EJERCICIO 1";

        // $arr=array("Amparo","Chati","Marmol","potro","o");

        // echo "<table>";
        //     echo "<tr><th>Cadena</th><th>Cumple patron</th></tr>";
        //     foreach ($arr as $cad) {
        //         echo"<tr><td>$cad</td><td>";

        //         if (preg_match("`[Pp]`", $cad)) echo "<br> cumple ";
        //         else echo "<br> no cumple ";

        //         echo "</td></tr>";
        //         echo "</table>";
        //         }
            
            
            
            
            
            
            // for ($i=0; $i < 5; $i++) { 
            //     $pe = (preg_math("`[Pp]`",$cad));
            //     if ($pe) {
            //         echo "La palabra $pe tiene p";
            //     }else
            //         echo "La palabra $pe no tiene p";
            // }




        echo "EJERCICIO 3";
        $pala = array("agua","azul","aguacero","azucena","romero");
        echo "<table>";
        echo "<tr><th></th>";

        foreach ($pala as $p1) echo "<th>$p1</th>";
            echo "</tr>";
        foreach ($pala as $p1) {
            echo "<th>$p1</th>";
            $subC = substr($p1, 0, 3);
            $clase = "";

            foreach ($pala as $p2) {
                if(preg_match("`^".$subC."`", $p2)) $clase = "corr";
                else $clase = "err";

                echo "<td class=\"$clase\"></td>";
                }
                echo "</tr>";
            }
    
        echo "</table>";

        echo "EJERCICIO 4";
        $plr=array("Tomate","Recorrer","Trepar","Carro","Romero");

        echo "<table>";
        echo "<tr><th>Cadena</th><th>Ocurrencias \"r\" </th></tr>";
        foreach ($plr as $cad ) {
            $cont = 0;
            echo "<tr><td>$cad</td>";
            while ($cad != "") {
                $cad = stristr($cad, "r");
                if ($cad != ""){
                    $cad = substr($cad,1);
                    $cont++;
                }
            } 
            echo "<td>$cont</td>";
        } 
        echo "</table>";


        echo "EJERCICIO 5";
        $cads = array("Moto","arrtr","12345234","Hablaba","bbbbb");
        echo "<table>";
        echo "<tr><th>Cadena</th><th>resultado </th></tr>";

        foreach ($cads as $cad) {
            echo "<tr><td>$cad</td>";
            $clase = "cbl";

            if(preg_match("`r{2,}`", $cad)) $clase="cr";
            elseif(preg_match("`(h{6}|b{3})`", $cad)) $clase="chb";
            elseif(preg_match("`aba`", $cad)) $clase = "caba";
            elseif(preg_match("`^[0-9]+$`", $cad)) $clase = "cnum";
            else $clase = "cbl";

            echo "<td class =\"$clase\"><td>";

            echo "<tr>";
        }
        
        echo "</table>";
        echo "EJERCICIO 6";

    
        $paginas = array("http://www.php.net/manual/es/function.str-pad.php", "https://www.grupoeag.com", "https://www.canva.com/design/DAGRPS9tGI4/rDRJLxpyqxZPa--YHqBzBg/edit", "https://www.argentina.gob.ar/");

        foreach($paginas as $pag){
            if(preg_match("'^https?://w{3}\.[a-z0-9]+(\.[a-z]+)+(/.*)+$'", $pag)){
                echo $pag." es una página<br>";
            }
        }


        echo "EJERCICIO 7";
        $cade = array("Moto chula","yes es si","escupete en la mano" );
        $replace = "";
        echo "<table>";
        echo "<tr><th>Original</th><th>Resultado</th></tr>";
        foreach ($cade as $cad) {
            $new =str_replace(" ", $replace, $cad);
            echo "<td>$cad</td><td>$new</td>";
            echo "</tr>";
        }
        echo "</table>";


        echo "EJERCICIO 8";
        $cade = array("Moto chula","yes es si","escupete en la mano" );
        echo "<table>";
        echo "<tr><th>Original</th><th>Resultado</th></tr>";
        foreach ($cade as $cad) {
            $new = str_pad ($cad, strlen($cad)+5, "-", STR_PAD_LEFT);
            $new = str_pad ($new, strlen($new)+3, ",", STR_PAD_RIGHT);
            echo "<td>$cad</td><td>$new</td>";
            echo "</tr>";
        }
        echo "</table>";


        echo "EJERCICIO 9<br>";
        $cadena = "Matilda se fue a beber agua";
        echo "La cadena original => $cadena <br>";
        echo "La cadena sustituida <b>".strtr($cadena,"ab","Av")."</b>";



        


    ?>
</body>
</html>