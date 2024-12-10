<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Codificar una página en PHP que, utilizando los tres tipos de bucles, muestre por pantalla las 10 primeras potencias de un número.</p>
    <?php
        echo "Con for";
        $a = 2;
        echo "<table>";
        for ($i=1; $i <= 10 ; $i++) { 
            $op = $a ** $i;
            echo "<tr><td>2^$i = $op</td></tr>";
        }
        echo "</table>";


        echo "<br>con foreach";
       
        echo "<table>";
        $r = range(1,10);
        foreach ($r as $value) {
            $ope = $a ** $value;
            echo "<tr><td>1^$value = $ope</td></tr>";
        }
        echo "</table>";


        echo "<br>con while";
        echo "<table>";
        $exp = 0;
        while($exp <= 10){
            $oper =  $a ** $exp;
            $exp++;
            echo "<tr><td>1^$exp = $oper</td></tr>";
        }
        echo "</table>";

    ?>
    <br>
    <h2>Ejercicio 2</h2>
    <p>Codificar una página en PHP que recorra los números desde el 260 hasta el 110, mostrando sólo los números que sean múltiplos de 3 o de 2. Hacerlo utilizando los 3 tipos de bucles existentes en PHP.</p>
    
    <?php
        echo "<br> CON WHILE <br>";
            $ini = 260;
            $fin = 110;

            $i = $ini;
            
            while($i > $fin){
                $mult2 = $i%2;
                $mult3 = $i%3;

                if($mult2 ==0 && $mult3 == 0 ) echo "$i es multiplo de 3 y 2";
                elseif($mult2 == 0) echo "$i es multiplo de 2";
                elseif($mult3 == 0) echo "$i es multiplo de 3";

                $i--;
                echo"<br>";

            }

        echo "<br> CON FOR <br>";
            for ($i=$ini; $i >=  $fin; $i--) { 
                $mult2 = $i%2;
                $mult3 = $i%3;

                if ($mult2 == 0 xor $mult3 == 0){
                    if ($mult2 == 0) echo "$i es multiplo de 2";
                    else echo "$i es multiplo de 3";

                    echo "<br>";
                }
            
            
            }

            echo "ej7 y 8";
            $paginas = 1;

            if($paginas > 1){
                echo "<a href = \"?pag=1\">Primer enlace<a>";
            }


    ?>

    <h2>EJ 3</h2>
    <?php
        $matriz["Antonio"] = array("mates" => 5, "lengua" =>8.3, "CN"=>9, "geo"=>7);
        
        $claveC = array_keys($matriz["Antonio"]);
        
        $matriz["Ana"]= array($claveC[0]=>8, $claveC[1]=>7, $claveC[2]=>4.5, $claveC[3]=>9);
        $matriz["Benito"]= array($claveC[0]=>9, $claveC[1]=>6.75, $claveC[2]=>9, $claveC[3]=>3.1);
        $matriz["Alex"]= array($claveC[0]=>8, $claveC[1]=>7, $claveC[2]=>4.5, $claveC[3]=>9);

        echo "<table><tr><th>Alumnos</th>";
        foreach ($claveC as $cl) echo "<th>$cl</th>" ;
        echo "<th>Media</th></tr>";
        
        foreach ($matriz as $alumno => $listNotas) {
            echo "<tr><td>$alumno</td>";
            $media = 0;
            foreach ($listNotas as $nota){
                echo"<td>$nota</td>";
                $media += $nota;
            }
            echo "<td>". $media/count($listNotas) ."</td>";

            echo "</tr>";
        }

        echo"</table>"

    ?>

    <h2>EJ 4</h2>
    <?php
        echo "<table>";
        $matri[] = array("Nombre" => "Pepe", "Peso" =>8.3, "Color"=>"Marron", "Edad"=>12);
        
        $claveC = array_keys($matri[0]);
        
        $matri[] = array($claveC[0]=> "Sparky", $claveC[1]=>3, $claveC[2]=>"Blanco", $claveC[3]=>2);
        $matri[] = array($claveC[0]=> "Tobby", $claveC[1]=>7.2, $claveC[2]=>"Beige", $claveC[3]=>8);
        $matri[] = array($claveC[0]=> "Bigotes", $claveC[1]=>4, $claveC[2]=>"Negro", $claveC[3]=>9);
        $matri[] = array($claveC[0]=> "Ricky", $claveC[1]=>0.1, $claveC[2]=>"Verde", $claveC[3]=>2);

        foreach ($matri as $usu => $masc) {
            echo "<tr><td>$usu </td>";
            foreach ($masc as $nom) {
                echo "<td>$nom</td>";

            }
            echo "</tr>";
        }

        echo "<tr><td>".$matri[3][$claveC[1]]."</td></tr>";
        $us = 0;
        foreach ($matri as $usu => $masc) {
            foreach ($masc as $nom) {
                if ($nom == "Sparky"){
                    $us = $usu;
                }
            }
        }
        echo "<tr><td>". $matri[$us][$claveC[2]] ."</td></tr>";

        $nEnc = FALSE;  
        do{
            $mas = current($matri);

            if($masc["Nombre"] == "Sparky"){
                echo "El color de Sparky es ".$masc["Color"]. "<br>";
                $nEnc = TRUE;
            }
        }while(next($matri) && $nEnc);

        
        echo "</table>";

    ?>




</body>
</html>