<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tCar, .tCld{
            border: 1px solid #42ff33;
            border-collapse: collapse;
        }
        .tHd{
            background-color: green;
            color: white;
        }

        .tRow:nth-child(even){background-color:#42ff33}

        .corr{background-color:#42ff33}
        .err{background-color:#f91a13}

        .cr{background-color:#f91a13}
        .chb{background-color:#42ff33}
        .caba{background-color:#003095}
        .cnum{background-color:#FFFF00}
        .cbl{background-color:#FFFFFF}

        .inco{color:#f91a13}
        .cor{color:#42ff33}
    </style>
</head>
<body>
    <?php
    /*
        echo "<table class=\"tCar\">";
        $cadena = "Soy una cadena";
        $len = strlen($cadena);
        
        echo "<tr  class=\"tRow\">";
        for($i=0; $i < $len*2; $i++){
            if($i < $len){
                echo "<th class=\"tHd\">$i</th>";
            }else{
                if($i == $len) echo "</tr><tr class=\"tRow\">";

                echo "<td>".$cadena[$i%$len]."</td>";
            }
        }
        echo "</tr>";

        echo "</table>";
        

        $cadena = "Hola soy una cadena, hola";
        $subC = "hol";

        echo "$cadena<br>";
        echo "$subC<br>";
        echo strchr($cadena, $subC)."<br>";
        echo strrchr($cadena, $subC)."<br>";
        echo stristr($cadena, $subC)."<br>";
        echo stripos($cadena, "h");
        

        $cadena = "ArIEsO5j@aa234";

        if(preg_match("'^[A-Z][a-z]{2,}[0-9]{3}$'", $cadena)){
            echo "La cadena cumple el patrón";
        }else{
            echo "La cadena NO cumple el patrón";
        }

        if(preg_match("'[A-Z](([a-zA-Z0-9]|[^a-zA-Z0-9])?)+[a-z]{2,}(([a-zA-Z0-9]|[^a-zA-Z0-9])?)+[0-9]{3}$'", $cadena)){
            echo "La cadena cumple el patrón";
        }else{
            echo "La cadena NO cumple el patrón";
        }

        if(preg_match("'[A-Z]'", $cadena) && preg_match("'[a-z]'", $cadena) && preg_match("'[0-9]'", $cadena) && preg_match("'[^a-zA-Z0-9]'", $cadena)){
            echo "La cadena cumple el patrón";
        }else{
            echo "La cadena NO cumple el patrón";
        }

        $correo = "r@gmail.com";

        if(preg_match("'^[a-z][a-z0-9]{0,}@[a-z]+\.(com|es)$'", $correo)){
            echo "<br><br>Es correo";
        }

        $arr = array("mesa", "pantalón", "espeto");

        echo "<table>";
        echo "<tr><th class=\"tHd\">Cadena</th><th>Cumple patrón</th></tr>";

        foreach($arr as $cad){
            echo "<tr><td>$cad</td><td>";
            
            if(preg_match("'[Pp]'", $cad)) echo "Si cumple";
            else echo "No cumple";

            echo "</td></tr>";
        }

        echo "</table>";

        $arr1 = array("mes@", "pantalóne$", "/espeto", "Casa");

        echo "<table>";
        echo "<tr><th class=\"tHd\">Cadena</th><th>Cumple patrón</th></tr>";

        foreach($arr1 as $cad){
            echo "<tr><td>$cad</td><td>";
            
            if(preg_match("'[@C/\$]'", $cad)) echo "Si cumple";
            else echo "No cumple";

            echo "</td></tr>";
        }

        echo "</table>";

        $cadenas = array("agua", "azul", "aguacero", "azucena", "romero");

        echo "<table>";
        echo "<tr><th></th>";
        foreach ($cadenas as $cad) echo "<th>$cad</th>";
        echo "</tr>";

        foreach ($cadenas as $cad){
            echo "<tr><th>$cad</th>";
            //agua, [0], 3 char -> agu
            $subC = substr($cad, 0, 3);
            $clase = "";

            foreach($cadenas as $cad2){
                //                '^agu'
                if(preg_match("'^".$subC."'",$cad2)) $clase = "corr";
                else $clase = "err";

                echo "<td class=\"$clase\"></td>";
            }
            echo "</tr>";
        }

        echo "</table>";

        $cads = array("Tomate", "Recorrer", "Trepar", "Carro", "Romero");

        echo "<table>";
        echo "<tr><th>Cadena</th><th>Ocurrencias \"r\"</th></tr>";

        foreach($cads as $cad){
            $cont = 0;
            echo "<tr><td>$cad</td>";
            //$cad = strtolower($cad);
            //$cont = substr_count($cad, "r");
            while($cad != ""){
                $cad = stristr($cad, "r");
                
                if($cad != ""){
                    $cad = substr($cad, 1);
                    $cont++;
                } 
            }
            echo "<td>$cont</td></tr>";
        }

        echo "</table>";

        
        $cads = array("Moto", "arrtr", "12345234", "Hablaba", "2heh34heh4heh");
        echo "<table>";
        echo "<tr><th>Cadena</th><th>Resultado</th></tr>";

        foreach($cads as $cad){
            echo "<tr><td>$cad</td>";
            $clase = "cbl";
            
            if(preg_match("'r{2,}'", $cad)) $clase = "cr";
            elseif(preg_match("'(.*h.*){6}'", $cad)) $clase = "chb";
            elseif(preg_match("'aba'", $cad)) $clase = "caba";
            elseif(preg_match("'^[0-9]+$'", $cad)) $clase = "cnum";
            else $clase = "cbl";

            echo "<td class=\"$clase\"></td>";

            echo "</tr>";
        }*/

        $arr = array("Soy una mesa", "Casa bonita", "Samosa sabrosa" );

        echo "<table><tr><th>Cadena Original</th><th>Cadena Nueva</th><th>Veces que aparece</th></tr>";

        $subC = "sa";

        foreach($arr as $cad){
            echo "<tr><td>$cad</td>";
            $cadM = strtolower($cad);
            echo "<td>".str_replace($subC, "pa", $cadM)."</td>";
            echo "<td>".substr_count($cadM, $subC)."</td></tr>";
        }


        echo "</table>";

        $paginas = array("http://www.php.net/manual/es/function.str-pad.php", "https://www.grupoeag.com", "https://www.canva.com/design/DAGRPS9tGI4/rDRJLxpyqxZPa--YHqBzBg/edit", "https://www.argentina.gob.ar/");

        foreach($paginas as $pag){
            if(preg_match("'^https?://w{3}\.[a-z0-9]+(\.[a-z]+)+(/.*)+$'", $pag)){
                echo $pag." es una página<br>";
            }
        }


        echo "<table><tr><th>Cadena Original</th><th>Cadena Nueva</th></tr>";

        foreach($arr as $cad){
            echo "<tr><td>$cad</td>";
            echo "<td>".str_replace(" ", "", $cad)."</td>";
            echo "</tr>";
        }


        echo "</table>";

        echo "<table><tr><th>Cadena Original</th><th>Cadena con -</th><th>Cadena con ,</th></tr>";

        foreach($arr as $cad){
            echo "<tr><td>$cad</td>";
            $ncad = strlen($cad) + 5;
            $cadN = str_pad($cad, $ncad, "-", STR_PAD_LEFT);
            echo "<td>".$cadN."</td>";
            $ncad = strlen($cad) + 3;
            echo "<td>".str_pad($cad, $ncad, ",", STR_PAD_RIGHT)."</td>";
            $ncad = strlen($cadN) + 3;
            echo "<td>".str_pad($cadN, $ncad, ",", STR_PAD_RIGHT)."</td>";
            echo "</tr>";
        }


        echo "</table>";

        $cadena = "Matilda se fue a beber agua";

        echo "<br>La cadena original <b>$cadena</b> <br>";
        echo "La cadena sustituida <b>".strtr($cadena, "ab", "Av")."</b>";

        $c1 = "Mi mama me mima";
        $c2 = "Quiero mucho a mi mama";

        $cadComp = implode("", [$c1, $c2]);

        echo "<br><br>".$cadComp."<br>";
        echo "<br>La cadena \"$c1\" se repite ";

        $c1min = strtolower($c1);
        $arr = count_chars($c1min, 0);

        foreach($arr as $letra => $rep){
            $let = chr($letra);
            if($let >= 'a' && $let <= 'z') echo "$let: $rep; ";
        }
        
        echo "<br>La cadena \"$c2\" se repite ";

        $c2min = strtolower($c2);
        $arr = count_chars($c2min, 0);

        foreach($arr as $letra => $rep){
            $let = chr($letra);
            if($let >= 'a' && $let <= 'z') echo "$let: $rep; ";
        }

        $usuarios = array("Erica", "M&nue!", "A!e?andro", "?uanca", "Maite", "P*cho");

        echo "<table><tr><th>USUARIO</th><th></th></tr>";
        foreach($usuarios as $usu){
            echo "<tr><td><b>$usu</b></td>";

            if(preg_match("'[&!\?\*]'", $usu)) echo "<td class=\"inco\"><b>INCORRECTO</b></td>";
            else echo "<td class=\"cor\"><b>CORRECTO</b></td>";

            echo "</tr>";
        }

        echo "</table>";

        $usrs[] = ["Erica", "1234"];
        $usrs[] = ["M&nue!", "5675m&nue!sjhdha"];
        $usrs[] = ["Maite", "kjdhMAITEjdka"];

        echo "<table><tr><th>USUARIO</th><th>CONTRASEÑA</th><th></th></tr>";
        foreach($usrs as $usrPssw){
            echo "<tr><th>".$usrPssw[0]."</th>";
            $nCar = strlen($usrPssw[1]);
            $nContr = str_pad("", $nCar, "*");
            echo "<td>$nContr</td>";

            $usrMin = strtolower($usrPssw[0]);
            $contMin = strtolower($usrPssw[1]);

            if(substr_count($contMin, $usrMin) == 0) echo "<td class=\"cor\"><b>CORRECTO</b></td>";
            else echo "<td class=\"inco\"><b>INCORRECTO</b></td>";

            echo "</tr>";
        }
        
        echo "</table>";

        strtr($cad, 'bcdefghijklmnñopqrstuvwxyza', 'abcdefghijklmnñopqrstuvwxyz');

        echo chr($car);

    ?>
</body>
</html>