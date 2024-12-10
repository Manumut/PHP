<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ej 1</h2>
    <?php
        $dia = date("w");
        switch($dia){
            case 1:
                echo "Hoy es lunes, día laboralbe";
            break;
            case 2:
                echo "Hoy es martes, día laboralbe";
            break;
            case 3:
                echo "Hoy es miercoles, día laboralbe";
            break;
            case 4:
                echo "Hoy es jueves, día laboralbe";
            break;
            case 5:
                echo "Hoy es viernes, día laboralbe";
            break;
            case 6:
                echo "Hoy es sábado, día no laboralbe";
            break;
            case 7:
                echo "Hoy es domingo, día no laboralbe";
            break;

        }
    ?>
    <h2>Ej2</h2>
    <p>
        <?php
            $v1 = 1;
            $v2 = 2;
            $v3 = 3;
            echo "Los valores que se usaran son $v1, $v2 y $v3";
        ?>
    </p>
    <p>
        <?php
        if($v1 > $v2 and $v1 > $v3){
            echo "$v1 es el número mayor";
        }
        elseif($v2 > $v1 and $v2 > $v3){
            echo "$v2 es el número mayor";
        }
        else{
            echo "$v3 es el número mayor";
        }
        ?>
    </p> 

    <h2>Ej3</h2>
    <p>
        <?php
            $p1 = "Manu";
            $p2 = "Aguayo";
            $p3 = "Laura";
            echo "Las palabras son $p1, $p2 y $p3"
        ?>
    </p>
    <p>
        <?php
            if($p1<$p2){
                if($p1<$p3){
                    $orden = $p1;

                    if($p2 < $p3) $orden = $orden." $p2 $p3";
                    else $orden = $orden." $p3 $p2";
                } else{
                    $orden = "$p3, $p1, $p2";
                    
                }
            }elseif($p2<$p3){
                if($p2<$p1){
                    $orden = $p2;

                    if($p1 < $p3) $orden = $orden." $p1 $p3";
                    else $orden = $orden." $p3 $p1";
                } else{
                    $orden = "$p1, $p2, $p3";
                }
            }else{
                if($p3<$p1){
                    $orden = $p3;

                    if($p2 < $p1) $orden = $orden." $p2 $p1";
                    else $orden = $orden." $p1 $p2";
                } else{
                    $orden = "$p2, $p3, $p1";
                }
            }
            echo "$orden";
        ?>
    </p>
    <h2>Ej4</h2>
    <table>
        <?php
            $n = 0;
            while($n < 10){
                echo "<td>$n</td>";
                $n++;
            }
        ?>
    </table>
    
    <h2>Ej5</h2>
    <table>
        <?php
            $n = 0;
            $m = 5;
            while($n < $m){
                $n++;
                if($n != $m){
                    echo "<td>$n</td>";
                }
            }
        ?>
    </table>

    <h2>Ej6</h2>
    <table>
        <?php
            $n = 1;
            $naux = 0;
            do{
                echo "<tr>";
                $naux = 0;
                do{
                    echo "<td>$n</td>";
                    $n++;
                    $naux++;
                }while($naux<10);
                echo "</td>";
            } while($n <= 100);
        ?>
    </table>

    
</body>
</html>