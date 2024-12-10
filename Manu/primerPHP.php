<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            background-color: blue;
            border: 5px solid red;
            color: white;
            border-radius: 1rem;
            text-align: center;
            padding: 1rem;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <td>Divisor</td>
            <td>Dividendo</td>
            <td>Cociente</td>
            <td>Resto</td>
        </tr>
        <tr>
            <td>
                <?php
                    $a = 10;
                    echo "$a";
                ?>
            </td>
            <td>
                <?php
                    $b = 2;
                    echo "$b";
                ?>
            </td>
            <td>
                <?php
                    $c = $a/$b;
                    echo "$c";
                ?>
            </td>
            <td>
            <?php
                    $c = $a%$b;
                    echo "$c";
                ?>
            </td>
        </tr>
    </table>
</body>
</html>