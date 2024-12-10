<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Escribir una página en PHP cree un array de coches y los muestre en una tabla.</p>
    <?php
        $coches = ["wolf", "alpine", "mercedes", "audi"];
    ?>
    <table>
        <?php
            for ($i=0; $i < count($coches); $i++) { 
                echo "<tr><td>$i</td><td>$coches[$i]</td></tr>";
            }
        ?>
    </table>
    <br>
    <p>Escribir una página en PHP que recorra un array y muestre el menor número que haya.</p>
    <?php
        $nume=[4,6,87,3,2,14,6];
        $numaux = $nume[0];
        for ($i=0; $i < count($nume); $i++) { 
            if($numaux > $nume[$i]){
                $numaux = $nume[$i];
            }
        }
        echo "<p>El numero menor es $numaux</p>";
    ?>
    <br>
    <p>Escribir una página en PHP que recorra un array y diga cuántos elementos tiene.</p>
    <?php
        $cont = 0;
        for ($i=0; $i < count($nume) ; $i++) { 
            $cont++;
        }
        echo "<p>Tiene $cont posiciones</p>";

        
        $e = 0;
        do{
            $e++;
        }while(next($nume));
        echo "El array tiene $e elementos";


        echo "<br> EJEMPLO <br>";

        $ejemplo = array("NOMBRE" => "Manu", "APELLIDO" => "romero", "EDAD" => 21, "PESO" => 90);

        echo "<table>";
        foreach ($ejemplo as $clave => $valor) {
            echo "<tr><td>$clave</td><td>$valor</td></tr>";
        }
        echo"</table>";
    ?>
    <br>
    <p>Escribir una página en PHP cree un array cuyas posiciones se llamen “palabra1”,“palabra2”, “palabra3”, “palabra4”. La web mostrará elarray dentro de una tabla.</p>
    
    <?php
        $por =["palabra1" => "manu", "palabra2" => "YO", "palabra3"=>"escupe", "palabra4"=>"benson"];
        echo "<table>";
        foreach($por as $key => $value){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>"
    ?>
</body>
</html>