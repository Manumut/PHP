<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_POST["env"])){
        $numero=$_POST["num"];
        $cont=0;
        $arr=[];
        for($i=1;$i<=$numero;$i++){
            if($numero%$i==0){
              $cont++;  
              $arr[]=$i;
            }
        }

        if($cont<=2){
            echo "es primo";
        }else{
            
            echo "<table><tr><th>$numero</th></tr>";

            foreach ($arr as $value) {
                echo "<tr><td>$value</td></tr>";
            }
            echo "</table>";
        }
    }else{
        echo '
            <form action="#" method="post">
        <label for="num">Indica un número</label><br>
        <input type="number" name="num"><br>
        <input type="submit" name="env" value="Enviar">
    </form>
        ';
    }
?>
</body>
</html>