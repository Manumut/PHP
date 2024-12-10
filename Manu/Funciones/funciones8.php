<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function dias(){
            $sec1 = strtotime($_POST["fecha1"]);
            $sec2 = strtotime($_POST["fecha2"]);
            $sec3 = strtotime($_POST["fecha3"]);
            $hoy = time();

            $dif1 = $hoy - $sec1;
            $dif2 = $hoy - $sec2;
            $dif3 = $hoy - $sec3;

            $totDias1 = intval($dif1 / (3600*24));
            $totDias2 = intval($dif2 / (3600*24));
            $totDias3 = intval($dif3 / (3600*24));


            if($dif1 > 0){
                $dif1 *= 5;
            }
            if($dif2 > 0){
                $dif2 *= 5;
            }
            if($dif3 > 0){
                $dif3 *= 5;
            }
            
        }

        

    if(isset($_POST["Enviar"])){
        echo "<table>";
            echo "<th>Nombre</th><th>Fecha de pago</th><th>Recargo</th>";
            dias();
        
        echo "</table>";
       

    }else{

       
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre1" placeholder="Introduzca su nombre">
        <input type="date" name="fecha1">
        <br>
        <input type="text" name="nombre2" placeholder="Introduzca su nombre">
        <input type="date" name="fecha2">
        <br>
        <input type="text" name="nombre3" placeholder="Introduzca su nombre">
        <input type="date" name="fecha3">
        <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>

    
    
    
    <?php
    }    
    ?>
</body>
</html>