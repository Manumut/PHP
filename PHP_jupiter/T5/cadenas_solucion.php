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
        }*/

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

    ?>
</body>
</html>