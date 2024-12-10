<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums[] = $_POST["n1"];
        $nums[] = $_POST["n2"];

        sort($nums);

        /*
        $rango = range($nums[0], $nums[1]);

        foreach($rango as $val) echo "$val, ";
        */
        for($i = $nums[0]; $i <= $nums[1]; $i++) echo "$i, ";
    ?>
</body>
</html>