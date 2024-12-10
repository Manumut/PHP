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
        echo $_POST["ge"];
        if($_POST["g"]=="1"){
            echo "hombres";
        }elseif ($_POST["g"]=="2") {
            echo "muj";
        }elseif($_POST["g"]=="3"){
            echo "bebes";
        }
    }else{
        echo '
            <form action="#" method="post">
    <label for="peso">Peso:</label><br>
    <input type="number" name="peso"><br>
    <label for="alt">Altura:</label><br>
    <input type="number" name="alt"><br>
    <select name="ge">
        <option value="1">Hombre</option>
        <option value="2">Mujer</option>
        <option value="3">Bebe</option>
    </select>
    <input type="submit" name="env" value="Enviar">
</form>
        ';
    }
?>
</body>
</html>