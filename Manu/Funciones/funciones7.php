<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
         function todasNotas(&$not){
            if($not <= 4){
                echo "Insuficiente";
            }elseif($not = 5){
                echo "Aprobado";
            }elseif($not = 6){
                echo "Bien";
            }elseif($not <= 8){
                echo "Notable";
            }else 
            echo "Sobresaliente";
        }
   
        function mostrarTabla(){
            $asignaturas = ["matemáticas", "lengua", "historia", "dibujo"];

            echo "<table>";
            foreach($asignaturas as $key){
                echo "<tr>";
                echo "<td>$key</td><td>".todasNotas($_POST["nota"])."</td>";
                echo "</tr>";
            }
            echo "</table>";

        }
        
   
   
        if(isset($_POST["Enviar"])){ 
            mostrarTabla();
            
           
        }
        else{
   ?>



<form action="funciones7.php" method="post" enctype="multipart/form-data" >
        <input type="text" name="nombre" placeholder="Escribe el nombre"><br>
        <br><input type="number" name="nota" placeholder="nota de mates"><br>
        <input type="number" name="nota" placeholder="nota de lengua"><br>
        <input type="number" name="nota"  placeholder="nota de historia"><br>
        <input type="number" name="nota"  placeholder="nota de dibujo"><br>
        <br><input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>
