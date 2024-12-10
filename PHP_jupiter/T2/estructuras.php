<html>
    <head>
        <title>
            Prueba
        </title>
    </head>
    <body>
        <p>
            <?php
                echo "Ejercicio 1 <br>";
                $dia = date("w");
                if($dia <= 5) echo "Hoy es laborable <br>";
                else echo "Hoy es fin de semana <br>";
            
                echo "<br> Ejercicio 2 <br>";
                $a = 2;
                $b = 0;
                $c = 7;

                if($a>$b){
                    if($a > $c) echo "$a es mayor que $b y $c";
                    else  echo "$c es mayor que $b y $a";
                }else{
                    if($b > $c) echo "$b es mayor que $a y $c";
                    else echo "$c es mayor que $b y $a";
                }


                echo "<br><br> Ejercicio 3 <br>";
                $p1 = "Seta";
                $p2 = "Toalla";
                $p3 = "Peru";

                if($p1<$p2){
                    if($p1<$p3){
                        $orden = $p1;

                        if($p2 < $p3) $orden = $orden." $p2 $p3";
                        else $orden = $orden." $p3 $p2";
                    } else{
                        $orden = "$p3 $p1 $p2";
                        
                    }
                } elseif ($p2<$p3){
                    if($p2<$p1){
                        $orden = $p2;

                        if($p1 < $p3) $orden = $orden." $p1 $p3";
                        else $orden = $orden." $p3 $p1";
                    } else{
                        $orden = "$p1 $p2 $p3";
                    }
                }else{
                    if($p3<$p1){
                        $orden = $p3;

                        if($p2 < $p1) $orden = $orden." $p2 $p1";
                        else $orden = $orden." $p1 $p2";
                    } else{
                        $orden = "$p2 $p3 $p1";
                    }
                }

                echo "$orden";

                echo "<br><br> Ejercicio 4 <br>";
                $str = "Hoy es ";
                switch($dia){
                    case 1:
                        $str .= " lunes";
                        break;

                    case 2:
                        $str .= " martes";
                        break;

                    case 3:
                        $str .= " miercoles";
                        break;
                }

                echo "$str";
            ?>
        </p>

        <table>
            <?php
                $f = 0;
                $n = 1;

                do{
                    echo "<tr>";

                    do{
                        $i = $n++ + $f*10;
                        echo "<td>$i</td>";

                    }while($n <= 10);

                    echo "</tr>";
                    $f += 1;
                    $n = 1;
                }while($f < 10);
            ?>
        </table>


            <?php
                echo "<br> Ejercicio 7 <br>";
                $coches = array("Nissan", "Peugeot", "Audi", "Ford", "Ferrari");
                $nCoches = count($coches);

                echo "<table>";
                
                echo "<tr>";
                
                for($i=0; $i<$nCoches;$i++){
                    echo "<td>$i</td>";
                }

                echo "</tr>";

                echo "<tr>";
                
                for($i=0; $i<$nCoches;$i++){
                    echo "<td>".$coches[$i]."</td>";
                }

                echo "</tr>";

                echo "</table>";


                echo "<br><br>Ejercicio 8<br>";
                $numeros = array(12,45,7,93,33,1);
                $min=$numeros[0];
                $tope = count($numeros);

                for($i=1; $i<$tope; $i++){
                    if($numeros[$i] < $min) $min=$numeros[$i];
                }

                echo "El número más pequeño es $min <br>";

                echo "<br><br>Ejercicio 9<br>";
                $i = 0;
                do{
                    $i++;
                }while(next($numeros));

                echo "El array tiene $i elementos";


                echo "<br><br> Ejemplo <br>";

                $ejemplo = array("NOMBRE" => "Erica","APELLIDO" => "PALOMINO","EDAD" => 33, "ALTURA" => 1.85);

                echo "<table>";
                foreach($ejemplo as $clave => $valor){
                    echo "<tr><td>$clave</td><td>$valor</td></tr>";
                }
                echo "</table>";


                echo nl2br("\n\nRelacion 2 Ej 1\n");
                $base = 2;
                echo nl2br("WHILE\n");
                $exp = 1;
                while($exp <= 10){
                    echo ($base ** $exp)."<br>";
                    $exp++;
                }

                echo nl2br("\nFOR\n");
                for($exp=1; $exp<=10; $exp++){
                    echo ($base ** $exp)."<br>";
                }

                echo nl2br("\nFOREACH\n");
                /*for($i = 1; $i <= 10; $i++){
                    $num[] = $i;
                }*/

                foreach(range(1,10) as $exp){
                    echo ($base ** $exp)."<br>";
                }


                echo nl2br("\n\nRelacion 2 Ej 2\n");
                echo nl2br("WHILE\n");
                $ini = 260;
                $fin = 110;

                $i = $ini;

                while($i >= $fin){
                    $mult2 = $i%2;
                    $mult3 = $i%3;

                    $resu = "$i es multiplo de ";

                    if($mult2 == 0 && $mult3 == 0) echo  "$resu 2 y 3";
                    elseif($mult2 == 0) echo "$resu 2";
                    elseif($mult3 == 0) echo "$resu 3";

                    $i--;
                    echo "<br>";
                }

                echo nl2br("\nFOR\n");
                for($i=$ini; $i>=$fin; $i--){
                    $mult2 = $i%2;
                    $mult3 = $i%3;

                    $resu = "$i es multiplo de ";

                    if($mult2 == 0 xor $mult3 == 0){
                        if($mult2 == 0) echo "$resu 2";
                        else echo "$resu 3";

                        echo "<br>";
                    }

                    
                }
            ?>




    </body>

</html>