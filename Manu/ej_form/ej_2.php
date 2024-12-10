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
            echo'<p style ="color: green; font-size:20px;">ESTA TODO CORRECTO</p>';
        }
    ?>
    <form action="ej2.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Nombre del usuario">
        <br>
        <input type="text" name="DNI" accept="^[0-9]{8}[A-Z]" placeholder="Numero del usuario">
        <br>
        <?php
        if(isset($_GET["err"])){
            if($_GET["err"] == 1) echo'<p style ="color: red; font-size:20px;">No es un PDF</p>';
            if($_GET["err"] == 2) echo'<p style ="color: red; font-size:20px;">No es un buen tamaño</p>';

        }
        ?>
        <input type="file" name="CV" accept="application/pdf">
        <br>
        <input type="submit" name="archivoNuevo" value="enviar">
    </form>
</body>
</html>