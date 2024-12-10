<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
 //Ejercicio 3
        $nums=$_POST["num1"];
        $aux=(int)$nums[0];
        echo "<table>";
            foreach ($nums as $value) {
                if($aux < (int)$value){
                    echo "<tr><td>$aux</td></tr>";
                }
            }
        echo"</table>";
    ?>
</body>
</html>