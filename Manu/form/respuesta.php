<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "ERl nombre de usuario es ".$_POST["nameUsu"],"<br>";
        echo "La contrase es ".$_POST["psw"]."<br>";
        echo "Vive en la provincia ";
        switch ($_POST["provincia"]) {
            case 'alm':
                echo "almeria";
                break;
            
            case 'gra':
                echo "granada";
                break;
        }

        
    ?>
    
</body>
</html>