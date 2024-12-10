<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        function get_ini_mes(int $mes, int $anio){
            $time = mktime(0,0,0,$mes,1$anio);

            $diaSem = getdate($time)["wday"];

            return $diaSem;

        }

        function impr_mes(int $mes, int $anio){
            $diaSem = get_ini_mes($mes, $anio);

            
        }
    ?>
</body>
</html>