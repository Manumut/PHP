<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $hoy = time();
        $fecha = strtotime($_POST["fech"]); //Lo ha pasado todo a segundos
        $fecha2 = strtotime($_POST["fech2"]);

        $formFecha = date("l", $fecha);
        echo "EJERCICIO 1 <br>";
        echo $formFecha;


        echo "<br> EJERCICIO 2 <br>";
        $dif = 0;
        if($fecha > $fecha2){
            $dif = $fecha-$fecha2;
            $totDias = $dif / (3600*24);
            echo $totDias.' dias de diferencia entre el '.date("d/m/Y",$fecha2).' y el '.date("d/m/Y",$fecha);
        }else{
            $dif = $fecha2-$fecha;
            $totDias = $dif / (3600*24);
            echo $totDias.' dias de diferencia entre el '.date("d/m/Y",$fecha).' y el '.date("d/m/Y",$fecha2);
        }


        echo "<br> EJERCICIO 3 <br>";
        $año = date("Y", $fecha);
        $añoHoy = date("Y", $hoy);
        $edad = $añoHoy - $año;
        if($edad >= 18){
            echo "Eres mayor de edad";
        }else  echo "Eres menor de edad";
        
    ?>
</body>
</html>