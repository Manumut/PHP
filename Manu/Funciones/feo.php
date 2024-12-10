<?php
// Función que calcula los días transcurridos desde la fecha recibida hasta hoy, y el recargo
function calcularDiasYRecargo($fecha) {
    // Convertimos la fecha recibida y la fecha actual a objetos DateTime
    $fechaRecibida = new DateTime($fecha);
    $fechaActual = new DateTime(); // Fecha actual
    
    // Calculamos la diferencia entre la fecha actual y la recibida
    $intervalo = $fechaActual->diff($fechaRecibida);
    
    // Calculamos los días de diferencia
    $dias = $intervalo->days;
    
    // Si la fecha es futura, devolver los días en negativo
    if ($fechaRecibida > $fechaActual) {
        $dias = -$dias;
    }
    
    // Calculamos el recargo (5€ por cada día de retraso)
    $recargo = 0;
    if ($dias > 0) { // Si es un retraso, calculamos el recargo
        $recargo = $dias * 5;
    }

    // Retornamos los días y el recargo
    return array('dias' => $dias, 'recargo' => $recargo);
}

// Procesamos el formulario si ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres']; // Array de nombres
    $fechas = $_POST['fechas']; // Array de fechas de pago
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Días desde la Fecha de Pago y Recargo</title>
</head>
<body>
    <h1>Formulario de Fechas de Pago y Recargos</h1>
    <form method="POST">
        <!-- Nombres de las personas -->
        <label for="persona1">Nombre Persona 1:</label>
        <input type="text" id="persona1" name="nombres[]" required><br><br>
        
        <label for="persona2">Nombre Persona 2:</label>
        <input type="text" id="persona2" name="nombres[]" required><br><br>
        
        <label for="persona3">Nombre Persona 3:</label>
        <input type="text" id="persona3" name="nombres[]" required><br><br>
        
        <!-- Fechas de pago -->
        <label for="fecha1">Fecha de Pago Persona 1 (YYYY-MM-DD):</label>
        <input type="date" id="fecha1" name="fechas[]" required><br><br>
        
        <label for="fecha2">Fecha de Pago Persona 2 (YYYY-MM-DD):</label>
        <input type="date" id="fecha2" name="fechas[]" required><br><br>
        
        <label for="fecha3">Fecha de Pago Persona 3 (YYYY-MM-DD):</label>
        <input type="date" id="fecha3" name="fechas[]" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mostrar la tabla con los resultados
        echo "<h2>Resultados</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Nombre</th><th>Fecha de Pago</th><th>Días Desde la Fecha</th><th>Recargo (€)</th></tr>";
        
        // Recorrer los nombres y fechas y mostrar los resultados
        for ($i = 0; $i < 3; $i++) {
            $nombre = $nombres[$i];
            $fecha = $fechas[$i];
            $resultados = calcularDiasYRecargo($fecha);
            $dias = $resultados['dias'];
            $recargo = $resultados['recargo'];
            echo "<tr><td>$nombre</td><td>$fecha</td><td>$dias</td><td>$recargo €</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
