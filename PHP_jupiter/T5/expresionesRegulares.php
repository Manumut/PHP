<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones Populares</title>
    <style>
        *{
            font-family: 'helvetica';
        }
        h4{
            width: 50%;
            text-align: center;
        }
        .eje > p{
            background: tomato;
            padding: 1rem;
            border: 3px solid black;
            filter: drop-shadow(3px 3px 0px black);
            font-weight: bolder;
            text-align: center;
            width: 30%;
            border-radius: 1rem;
        }
        section{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .n100{
            border-collapse: collapse; 
        }
        .hayP{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: #91ff8d;
        }
        .nhayP{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: tomato;
            text-align: center;
            font-weight: bolder;
        }
        .rojo{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: red;
        }
        .amarillo{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: yellow;
        }
        .azul{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: blue;
        }
        .verde{
            border: 2px solid black;
            padding: 1rem 2rem;
            background: green;
        }
        .border{
            border: 2px solid black;
            text-align: center;
            padding: .5rem 1rem;
            font-weight: bolder;
        }
        .eje4{
            background: #9BBB59;
            border: 1px solid white;
            color: white;
            padding: .5rem 1rem;
        }

        .eje4p{
            border: 1px solid #9BBB59;
            color: black;
            font-weight: bolder;
            padding: .5rem 1rem;
        }
        .eje5{
            border: 2px solid #89ABD2;
            color: black;
            font-weight: bolder;
            padding: .5rem 1rem;
        }
        .eje5h{
            border: 2px solid #89ABD2;
            color: black;
            background: #C6D9F1;
            font-weight: bolder;
            padding: .5rem 1rem;
        }
    </style>
</head>
<body>
    <section class="eje">
        <h3>Ejercicio 1</h3>
        <h4>Haz un script en PHP que compruebe si las cadenas
        almacenadas en un array empiecen por mayúscula,
        contengan 2 o más letras minúsculas y acaben por 3
        números.
        </h4>
        <?php
            $cadena = "Aaaa666";

            if(preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`", $cadena)){
                echo "<p>Cumple las condiciones</p>";
            }else{
                echo "<p>No cumple las condiciones</p>";
            }

            $cadena = "A4aaa666";

            if(preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`", $cadena)){
                echo "<p>Cumple las condiciones</p>";
            }else{
                echo "<p>No cumple las condiciones</p>";
            }
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 3</h3>
        <h4>Comprueba que sea un email
        </h4>
        <?php
            $correo = "ra@gmail.com";
            // No empiece por numero, que pueda tre
            if(preg_match("'^[a-z][a-z0-9]+@[a-z0-9]+\.(com|es)$'", $correo)){
                echo "<p>Cumple las condiciones</p>";
            }else{
                echo "<p>No cumple las condiciones</p>";
            }
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 1</h3>
        <h4>Escribir una página en PHP que tenga un array de 5 cadenas. La página
        deberá mostrar en una tabla cada cadena indicando de alguna forma si dicha
        cadena contiene dentro el símbolo ‘p’.
        </h4>
        <?php
            $correo = ["askdjpsf","asdasgf","sdhsdr","dfhdfv","wefrsdh"];

            echo "<table class=\"n100\">";
            echo "<tr>";
            for ($i=0; $i < 5; $i++) { 
                if(preg_match("'p'", $correo[$i])){ 
                    echo "<td class=\"hayP\">$correo[$i]</td>";
                }
                else echo "<td class=\"nhayP\">$correo[$i]</td>";
            }
            echo "</tr>";
            echo "</table>";
        ?>
    </section>
    
    <section class="eje">
        <h3>Ejercicio 2</h3>
        <h4>Codificar un documento PHP que tenga un array de varias cadenas. El
        documento mostrará para cada una de las cadenas si contienen alguno de los
        siguientes caracteres: $, C, / o @. Con que la cadena contenga uno de ellos es
        suficiente.
        </h4>
        <?php
            $correo = ["askdjp\$sf","asCdasgf","uajsdfhka","sdh/sdr","dfhdfv","wef@rsdh"];

            echo "<table class=\"n100\">";
            echo "<tr>";
            for ($i=0; $i < 5; $i++) { 
                if(preg_match("'[\$C/@]'", $correo[$i])){ 
                    echo "<td class=\"hayP\">$correo[$i]</td>";
                }
                else echo "<td class=\"nhayP\">$correo[$i]</td>";
            }
            echo "</tr>";
            echo "</table>";
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 3</h3>
        <h4>Escribir una página en PHP que contenga 5 cadenas de caracteres. El código
        PHP deberá comprobar si las cadenas de caracteres comienzan igual en
        parejas de 2. Para considerar que empiezan igual deberán tener al menos los 3
        primeros caracteres iguales. Mostrar el resultado en una tabla de colores
        </h4>
        <?php
            $palabras = ["agua", "azul", "aguacero", "azucena", "romero"];

            echo "<table class=\"n100\">";
            echo "<tr><th class=\"border\"></th><th class=\"border\">agua</th><th class=\"border\">azul</th><th class=\"border\">aguacero</th><th class=\"border\">azucena</th><th class=\"border\">romero</th></tr>";
            $primera = false;
            foreach ($palabras as $el1) { 
                echo "<tr><td class=\"border\">$el1</td>";
                $subC = substr($el1, 0, 3);
                foreach ($palabras as $el2) { 
                    // $prueba = $el1[0].$el1[1].$el1[2]; OTRA MANERA
                    if(preg_match("'^".$subC."'", $el2)){
                        echo "<td class=\"hayP\"></td>";
                    }else{
                        echo "<td class=\"nhayP\"></td>";
                    }
                }
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 4</h3>
        <h4>Codificar un documento PHP que tenga un array de 10 cadenas. Se mostrará
        en una tabla cuantas veces aparece la letra “r” en cada cadena. No se tendrán
        en cuenta mayúsculas ni minúsculas.
        </h4>
        <?php
            $palabritas = ["perro", "zorrillos", "aguacero", "recorrer", "romero"];
            $cont = 0;
            echo "<table class=\"n100\">";
            echo "<tr><th class=\"eje4\">Cadena</th><th class=\"eje4\">Ocurrencias \"r\"</th></tr>";
            foreach ($palabritas as $el1) { 
                echo "<tr><td class=\"eje4p\">$el1</td>";
                $cont = 0;
                for($i = 0; $i<strlen($el1); $i++) { 
                    if(preg_match("'^r'", $el1[$i])){
                        $cont++;
                    }
                }
                echo "<td class=\"eje4p\">$cont</td>";
                echo "</tr>";
            }
            
            echo "</table>";

            $palabritas = ["perro", "zorrillos", "aguacero", "recorrer", "romero"];
            $cont = 0;
            echo "<table class=\"n100\">";
            echo "<tr><th class=\"eje4\">Cadena</th><th class=\"eje4\">Ocurrencias \"r\"</th></tr>";
            foreach ($palabritas as $el1) { 
                echo "<tr><td class=\"eje4p\">$el1</td>";
                $cont = 0;
                while($el1 != ""){
                    $el1 = stristr($el1, "r");

                    if($el1 != ""){
                        $el1 = substr($el1, 1);
                        $cont++;
                    }
                }
                echo "<td class=\"eje4p\">$cont</td>";
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 5</h3>
        <h4>Codificar un documento PHP que tenga un array de varias cadenas. El
            documento comprobará si dichas cadenas:
            <br>a. Tienen dentro varias “r” seguidas (rojo)
            <br>b. Tienen el carácter “h” 6 veces o el carácter “b” 3 veces (verde)
            <br>c. Contienen la cadena “aba” (azul)
            <br>d. Contienen sólo números (amarillo)
        </h4>
        <?php
            $palaColo = ["Moto", "arrtr", "12345234", "Hablaba", "bbbbb"];
            echo "<table class=\"n100\">";
            echo "<tr><th class=\"eje5h\">Cadena</th><th class=\"eje5h\">Resultado</th></tr>";
            foreach ($palaColo as $cad) { 
                echo "<tr><td class=\"eje5\">$cad</td>";
                if(preg_match("'r{2,}'", $cad)){
                    echo "<td class=\"rojo eje5\"></td>";
                }elseif(preg_match("'aba'", $cad)){
                    echo "<td class=\"azul eje5\"></td>";
                }elseif(preg_match("'^[0-9]+$'", $cad)){
                    echo "<td class=\"amarillo eje5\"></td>";
                }elseif(preg_match("'(h{6}|b{5})'", $cad)){
                    echo "<td class=\"verde eje5\"></td>";
                }else{
                    echo "<td class=\"eje5\"></td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </section>
    <section class="eje">
        <h3>Ejercicio 6</h3>
        <h4>Implementa una página en PHP en la que, dado un array de cadenas de
        caracteres, se muestre en una tabla si es una url o no. Para ello, el string
        tendrá que cumplir las características de las mismas.
        </h4>
        <?php
            $palaColo = ["Moto", "arrtr", "12345234", "Hablaba", "bbbbb"];
            echo "<table class=\"n100\">";
            echo "<tr><th class=\"eje5h\">Cadena</th><th class=\"eje5h\">Resultado</th></tr>";
            foreach ($palaColo as $cad) { 
                echo "<tr><td class=\"eje5\">$cad</td>";
                if(preg_match("'r{2,}'", $cad)){
                    echo "<td class=\"rojo eje5\"></td>";
                }elseif(preg_match("'aba'", $cad)){
                    echo "<td class=\"azul eje5\"></td>";
                }elseif(preg_match("'^[0-9]+$'", $cad)){
                    echo "<td class=\"amarillo eje5\"></td>";
                }elseif(preg_match("'(h{6}|b{5})'", $cad)){
                    echo "<td class=\"verde eje5\"></td>";
                }else{
                    echo "<td class=\"eje5\"></td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        ?>
    </section>
</body>
</html>