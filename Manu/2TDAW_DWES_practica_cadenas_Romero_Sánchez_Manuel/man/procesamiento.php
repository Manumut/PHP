<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
   
        <?php
        

        // Guardo en un array todas las palabras

        // USAMOS ESTO PARA SACAR LOS DATOS QUE NOS DA EL USUARIO   
        if(isset($_POST["archivoNuevo"])){

            $ruta = './img/';
        
            $origen = $_FILES["img"]["tmp_name"];
            $destino = "";

            $nomOrig = $_FILES["img"]["name"];

            $nnom = $_POST["ra"];
            $nnom = $_POST[$nnom];

            $arr = explode(".", $nomOrig);
            $ext = end($arr);
        
            // TRUQUITO PARA PONER EL FINAL DE LA IMAGEN
            if(!empty($_POST["img"])){
                $nnom = $_POST["img"];

                if(!preg_match("'^.+\.[a-z]+$'", $nnom)){
                    $nnom .= ".".$ext;
                }
                $destino = $ruta.$nnom;
            
            }else{
                $nnom = $nnom.".".$ext;
                $destino = $ruta.$nnom;
            }
            move_uploaded_file($origen, $destino);

            $tipo="";
            $tipo2="";
        // if(isset($_POST["archivoNuevo"])){

        //     $cadenas="";
        //     // for($i = 0; $i < 7; $i++){
        //     //     $cadenas[] = $_POST["text$i"];
        //     // }
        
        //     // Crear carpeta si no existe
        //     if (!file_exists('img')) {
        //         mkdir('img', 0777, true);
        //     }

        //     // Mover la imagen a la carpeta deseada
        //     move_uploaded_file($_FILES['img']['tmp_name'], $rutaDestino);
        }

        //     // Dentro voy a hacer todas las funciones y como tienen un nombre guardado luego voy a saber en cual funciona

            echo "<h2>Resultado de la Validación</h2>";
            echo '<table border="1">';
            echo '<tr><th>Texto</th><th>Categorías</th></tr>';
            foreach($_POST as $cad => $values){
                $categoria="";
                if($values === ""){
                    $categoria = "cadena vacia";
                }
                if(preg_match("'\s*[a-zA-Z]\s*'", $values)){
                    $categoria = "Cadena de una sola palabra";
                }
                if(preg_match("'\s*[a-zA-Z]+\s+[a-zA-Z]\s*'", $values)){
                    $categoria = "Cadena de dos palabras";
                }
                if(preg_match("'\s*[a-zA-Z]*\s*(,\s*[a-zA-Z]+)+\s*'", $values)){
                   $categoria = "Cadena de 3 o más palabras separadas por comas";
                }
                if(preg_match("'\s*-?[0-9]\.[0-9]+\s*'", $values)){
                    $categoria = "Número decimal";
                }
                if(preg_match("'\s*-?\d*[13579](\.\d*[13579])?\s*'", $values)){
                    $categoria = "Número impar";
                }
                if(preg_match("'^\s*\+34\s?[6-9]\d{8}\s*$'", $values)){
                    $categoria = "Número de teléfono";
                }
                if(preg_match("'^\s*\d{8}\s?[A-Z]\s*$'", $values)){
                    $categoria = "DNI";
                }
                if(preg_match("'^\s*(?=(.*[0-9]){2,})(?=(.*[A-Z]))(?=(.*[\W_]){3,}).{8,20}\s*$'", $values)){
                    $categoria = "Contraseña";
                }
                echo "<tr><td> $values </td><td> $categoria </td></tr>";

            }
            echo '</table>';
            ?>

        <!-- Creacion del formulario -->
        <form action="procesamiento.php" method="post" enctype="multipart/form-data">

        <!-- Le pongo el radio para que me elija cual va a ser el nombre que le va a querrer poner luego a la imagen -->
        <!-- <?php
        // for ($i=0; $i < 7 ; $i++) { 
        //     echo "<br><input type = \"radio\" name=\"elej$i\">Escriba algo 
            
        //     <input type=\"text\" type=\"radio\" name=\"text$i\" placeholder=\"Inserta un texto\"><br>";
        // }
        // echo "<br><input type=\"file\" name=\"img\" accept=\"image/*\"> <br>";
        // echo "<br><input type=\"submit\" name=\"archivoNuevo\" value=\"Enviar\">";

        ?> -->
        <br>
        <input type = "radio" name="elej">Escriba algo  
        <input type="text" type="radio" name="text$i" placeholder="Inserta un texto><br>";

        </form> 

<!--TODO CON EXPRESIONES REGULARES

ESTO PARA QUE PUEDA PONER SOLO UNA PALABRA Y QUETENGA ESPACIUOS DONDE QUIERA:    ^\s*[a-zA-Z]\s*$

ESTO PARA QUE PUEDA PONERTE DOS PALABRAS Y QUE TENGA ESPACIOS :    ^\s*[a-zA-Z]+\s+[a-zA-Z]\s*$

ESTO PARA QUE PUEDA METER UNA ENUMERACION DE 3 O MAS PALABRAS SEPARADAS POR COMAS Y QUE TENGA ESPACIOS:         \s*[a-zA-Z]*\s*(,\s*[a-zA-Z]+)+\s*

ESTO PARA UN NUMERO DECIMAL Y TENGA ESPACIOS:    \s*-?[0-9]\.[0-9]+\s*

ESTO PARA UN NUMERO IMPAR Y QUE PUEDA SER DECIMAL Y TENGA ESPACIOS:  ^\s*-?\d*[13579](\.\d*[13579])?\s*$ 

ESTO PARA QUE ME PONGA UN NUMERO DE TELEFONO:   ^\s*\+34\s?[6-9]\d{8}\s*$

ESTO PARA QUE ME PONGA UN DNI: ^\s*\d{8}\s?[A-Z]\s*$

ETSO PARA QUE ME PONGA UNA CONTRASEÑA:  ^\s*(?=(.*[0-9]){2,})(?=(.*[A-Z]))(?=(.*[\W_]){3,}).{8,20}\s*$

    -->

    
    </form>
</body>
</html>
