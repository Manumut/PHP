<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table{
                background: linear-gradient(to bottom , red, orange, yellow, green, blue, indigo, violet);
                height: 98vh; 
                margin: 0;
                text-align:center;
                color:white;
            }
            td,tr{
                border:solid 1px;
                width: 4%;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<table>";
           for ($i=0; $i <=10 ; $i++) { 
            echo "<tr>";
                for ($k=0; $k <=10 ; $k++) { 
                    echo"<td>$k x $i= ".$k*$i."</td>";
                }
            echo "</tr>";
           }
           echo "</table>";
        ?>
    </body>
</html>