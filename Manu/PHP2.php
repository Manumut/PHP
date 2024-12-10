<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ARRAY NORMAL</h2>
    <?php
        $array = ["Alejandro","Aguallo","Chinchilla",21,1.70,70]
    ?>
    <table>
            <tr>
                <td>Nombre</td>
                <td>Apellido_1</td>
                <td>Apellido_2</td>
                <td>Edad</td>
                <td>Altura</td>
                <td>Kg</td>
            </tr>
                <td>
                    <?php
                    echo $array[0];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array[1];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array[2];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array[3];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array[4];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array[5];
                    ?>
                </td>
            </tr>
    </table>    
           <br>
           <h2>ARRAY ASOCIATIVO</h2>
            <?php
              $array = ["nom" => "Alejandro","ap1"=>"Aguallo","ap2"=>"Chinchilla","ed"=>21,"al"=>1.70,"pe"=>70]
            ?>
    <table>
            <tr>
                <td>Nombre</td>
                <td>Apellido_1</td>
                <td>Apellido_2</td>
                <td>Edad</td>
                <td>Altura</td>
                <td>Kg</td>
            </tr>
                <td>
                    <?php
                    echo $array["nom"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array["ap1"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array["ap2"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array["ed"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array["al"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $array["pe"];
                    ?>
                </td>
            </tr>    

        
</body>
</html>