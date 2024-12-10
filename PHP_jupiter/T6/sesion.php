<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["Envio"])){
            $psw = $_POST["psw"];
            $psw2 = $_POST["psw2"];

            $uri = "sesion.php";
            
            if(strcmp($psw, $psw2) != 0)
                header("Location: $uri?err=1");
            elseif(!preg_match("'^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,16}$'", $psw))
                header("Location: $uri?err=2");

            
            echo "Hola ".$_POST["usu"];

        }else{
            echo "<form action=\"#\" method=\"POST\">";
            echo "<input type=\"text\" name=\"usu\" placeholder=\"Introduce usuario\"><br>";
            
            if(isset($_GET["err"])){
                if($_GET["err"] == 1) echo "<p style=\"color:red\">Las contraseñas no coinciden</p>";
                if($_GET["err"] == 2) echo "<p style=\"color:red\">La contraseña no cumple el patrón</p>";
            }
            
            echo "<input type=\"password\" name=\"psw\" placeholder=\"Introduce contrseña\"><br>";
            echo "<input type=\"password\" name=\"psw2\" placeholder=\"Repite contrseña\"><br>";
            echo "<input type=\"submit\" name=\"Envio\" value=\"Enviar\">";
            echo "</form>";
        }
    ?>
    
</body>
</html>