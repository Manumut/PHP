<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <!-- Creacion del formulario -->
    <form action="procesamiento.php" method="post" enctype="multipart/form-data">
        <?php
        // Le pongo el radio para que me elija cual va a ser el nombre que le va a querrer poner luego a la imagen
        for ($i=0; $i < 7 ; $i++) { 
            echo "<br><input type = \"radio\" name=\"elej\">Escriba algo 
            
            <input type=\"text\" type=\"radio\" name=\"text$i\" placeholder=\"Inserta un texto\"><br>";
        }
        echo "<br><input type=\"file\" name=\"img\" accept=\"image/*\"> <br>";
        echo "<br><input type=\"submit\" name=\"archivoNuevo\" value=\"Enviar\">";

        // Guardo en un array todas las palabras
        if(isset($_POST["submit"])){

            $cadenas=[];
            for($i = 0; $i < 7; $i++){
                $cadenas[] = $_POST["text$i"];
            }
        

            // Dentro voy a hacer todas las funciones y como tienen un nombre guardado luego voy a saber en cual funciona
            foreach($cadenas as $cad){
                if($cad = ""){
                    echo "cadena vacia";
                }
                elseif($cad = "")

            }
        }
        ?>


    
    </form>
</body>
</html>