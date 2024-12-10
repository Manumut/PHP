<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EJERCICIO 1</h3>
    <p>Codificat una pagina php que cree 3 variables de distinto tipo, les asigne valor y las muestre por pantalla, indicando para cada una de ellas tipo y valor.</p>
    <?php 
        $va1 = 2;
        $va2 = "ojo";
        $va3 = 69;
    ?>
        
        <p>
            <?php 
                echo Gettype($va1)." --> $va1"; 
            ?>;
        </p>
        <p>
            <?php 
                echo Gettype($va2)." --> $va2"; 
            ?>;
        </p>
        <p>
            <?php 
                echo Gettype($va3)." --> $va3"; 
            ?>;
        </p> 
    <br>
    <h3>EJERCICIO 2</h3>
    <p>Escribir una pagina en php que permita pasar de grados Fahrenheit a grados Celsius. La pagina denyta una variable con los grados Fahrenheit que se quieren traducir y mostrara por panrtalla un mensaje parecido a este: 75 grados ºF corresponden a 23.8888889 ºC</p>

    <?php 
        $F = 75;
        $O = ($F-32)*(5/9);
    ?>
    <p>
        <?php
            echo "$F grados ºF corresponden a $O ºC";
        ?>
    </p>
    <br>
    <h3>EJERCICIO 3</h3>
    <p>Diseñe un programa que lea los coeficientes de una ecuación de segundo grado y calcule sus resultados, asumiendo que ambas 2 soluciones son reales.</p>
    <?php
        $A = 1;
        $B = 2;
        $C = 1;

        $R1 = (-($B)+sqrt(($B*$B)-(4*$A*$C)))/(2*$A);
        $R2 = (-($B)-sqrt(($B*$B)-(4*$A*$C)))/(2*$A);
    ?>
    <p>
        <?php
            echo "Resultado 1 = $R1";
            echo "Resultado 2 = $R2";
        ?>
    </p>
    <br>
    <h3>EJERCICIO 4</h3>
    <?php
        $array = ["Alejandro","Aguallo Chinchilla",21,4000,"14/10/2002"]
    ?>
    <table>
        <tr>
            <td>0</td>
            <td>
                <?php
                echo $array[0];
                ?>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <?php
                echo $array[1];
                ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <?php
                echo $array[2];
                ?>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>
                <?php
                echo $array[3];
                ?>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>
                <?php
                echo $array[4];
                ?>
            </td>
        </tr>
    </table>
    <h3>EJERCICIO 5</h3>



    <h3>EJERCICIO 6</h3>


</body>
</html>