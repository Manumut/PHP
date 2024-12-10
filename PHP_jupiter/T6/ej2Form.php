<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET["acc"])){
            echo '<p style="color:green;font-size:14px">El archivo se ha guardado correctamente</p>';  
        }
    ?>
    <form action="ej2.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Introduce el nombre" required>
        <br>
        <input type="text" name="DNI" accept="'^[0-9]{8}[A-Z]$'" placeholder="Introduce el DNI" required>
        <br>

        <?php
            if(isset($_GET["err"])){
                if($_GET["err"] == 1) echo '<p style="color:red;font-size:10px">El archivo no es PDF</p>';
                if($_GET["err"] == 2) echo '<p style="color:red;font-size:10px">El archivo es demasiado grande</p>';
            }
        ?>

        <input type="file" name="cv" required>
        <br>
        <input type="submit">
    </form>
</body>
</html>