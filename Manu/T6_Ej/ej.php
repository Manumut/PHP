<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0; $i < 10 ; $i++) { 
            $potencia = $_POST["n1"]**$i;
            echo 'El numero '.$_POST["n1"].' al elebarlo a '.$i.' me da '.$potencia.'<br>';
        }
        echo '<br>';
        for ($i=0; $i <= 10 ; $i++) { 
            $multiplicacion = $_POST["n2"]*$i;
            echo 'El numero '.$_POST["n2"].' al multiplicarlo por '.$i.' me da '.$multiplicacion.'<br>';
        }
        echo '<br>';

        if($_POST["n3"] > $_POST["n4"]){
            if($_POST["n3"] < $_POST["n5"]){
                echo 'El orden es: '.$_POST["n5"].','.$_POST["n3"].','.$_POST["n4"].'<br>';
            }
        }elseif($_POST["n4"] > $_POST["n3"]){
            if($_POST["n4"] < $_POST["n5"]){
                echo 'El orden es: '.$_POST["n5"].','.$_POST["n4"].','.$_POST["n3"].'<br>';
            }
        }
        elseif($_POST["n5"] > $_POST["n3"]){
            if($_POST["n5"] < $_POST["n4"]){
                echo 'El orden es: '.$_POST["n4"].','.$_POST["n5"].','.$_POST["n3"].'<br>';
            }
        }else{
            echo 'El orden es: '.$_POST["n3"].','.$_POST["n5"].','.$_POST["n4"].'<br>';
        }
        echo '<br>';//con un asort se resuelve mas facil xq lo ordena


        $suma = $_POST["nu1"] + $_POST["nu2"];
        $multi = $_POST["nu2"] * $_POST["nu3"];
        $div = $_POST["nu1"] / $_POST["nu3"];
        $com1 = $suma + $_POST["nu3"];
        $com2 = ($_POST["nu2"] + $_POST["nu3"]) / $_POST["nu1"];
        echo 'Valor 1 ='.$_POST["nu1"].'<br>';
        echo 'Valor 2 ='.$_POST["nu2"].'<br>';
        echo 'Valor 3 ='.$_POST["nu3"].'<br>';
        echo 'Valor 1 + valor 2 ='.$suma.'<br>';
        echo 'Valor 2 * valor 3 ='.$multi.'<br>';
        echo 'Valor 1 / valor 3 ='.$div.'<br>';
        echo 'Valor 1 + valor 2 + valor 3 ='.$com1.'<br>';
        echo '(Valor 2 + valor 3) /valor 1 ='.$com2.'<br>';

        echo '<br>';

        if ($_POST["nu4"] > $_POST["nu5"]) {
            for ($i= $_POST["nu5"]+1; $i < $_POST["nu4"] ; $i++) { 
                echo $i.',';
            }
            echo 'es el rango entre '.$_POST["nu5"].' y '.$_POST["nu4"];
            
        }elseif ($_POST["nu5"] > $_POST["nu4"]){
            for ($i= $_POST["nu4"]+1; $i < $_POST["nu5"] ; $i++) { 
                echo $i.',';
            }
            echo 'es el rango entre '.$_POST["nu4"].' y '.$_POST["nu5"];
        }else
            echo 'No hay rango entre '.$_POST["nu4"].' y '.$_POST["nu5"];



        





    ?>
</body>
</html>