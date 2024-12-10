<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caca</title>
    <link rel="stylesheet" href="pp.css">
</head>
<body>
    <?php 
        $per = [ "Nombre" => "JOJO","Apllido 1" => "Primeto","Apllido 2" => "Segunda","Edad" => 12/*edad*/ ,"Altura" => 199 /*cm*/, "Peso" => 50 /*kg*/];
    ?>
    <section>
        <div>
            <img src="./favicon.ico" alt="">
        </div>
        <table>
            <tr>
                <?php
                foreach (array_keys($per) as $key => $value) {
                    
                        echo  "<td>$value</td>";
                    
                };
                ?>
            </tr>
            <tr>
                <?php 
                    foreach ($per as $key => $value) {
                        echo "<td>$value</td>";
                    };
                ?>
            </tr>
        </table>
    </section>

    <section id="ej1">
        <?php 
            $papa = 1.5;
            $huevo = "asado";
            $tem = 12;
            echo $papa." ".Gettype($papa);
            echo  "<br>".$huevo." ".Gettype($huevo);
            echo  "<br>".$tem." ".Gettype($tem);
        ?>
    </section>
    <section id="ej2">
         <?php 
            $fa = 75;
            echo "<br>".$fa." Farengeit son ".($fa-32*5/9)." Grados celious"
         ?>
    </section>
    <section id="ej3">
        <?php 
            $a = 4;
            $b = 9;
            $c = 2;
            echo "<br>Respuesta 1 es: X = ".((-$b + sqrt($b**2 -4*$a*$c))/2*$a);
            echo " <br>Respuesta 2 es: X = ".((-$b - sqrt($b**2 -4*$a*$c))/2*$a);        
        ?>
    </section>
    <section id="ej4">
        <br>
        <?php 
            $persona = ["Nombre", "Apellidos", "Edad", "Salario", "Fecha nacimiento"];
        ?>
            <table>
                <tr>
                    <td>0</td>
                    <td>
                        <?php 
                            echo $persona[0];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                    <?php 
                            echo $persona[1];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                    <?php 
                            echo $persona[2];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                    <?php 
                            echo $persona[3];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                    <?php 
                            echo $persona[4];
                        ?>
                    </td>
                </tr>
            </table>
    </section>

    <section id="ej5">
         <?php 
            $xy = ["X", "Y", "Z"];
         ?>    
                
    </section>

</body>
</html>