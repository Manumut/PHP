<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Textos</title>
</head>
<body>
    <h1>Validación de Textos</h1>

    <?php
    // Función para clasificar los textos
    function clasificarTexto($texto) {
        $categorias = [];

        // 1. Cadena vacía
        if (empty(trim($texto))) {
            $categorias[] = 'Cadena vacía';
        }

        // 2. Cadena con una única palabra
        if (preg_match('/^[a-zA-Z]+$/', trim($texto))) {
            $categorias[] = 'Cadena con una única palabra';
        }

        // 3. Cadena con dos palabras
        if (preg_match('/^[a-zA-Z]+\s+[a-zA-Z]+$/', trim($texto))) {
            $categorias[] = 'Cadena con dos palabras';
        }

        // 4. Cadena con una enumeración
        if (preg_match('/^[a-zA-Z]+(,\s*[a-zA-Z]+)+$/', trim($texto))) {
            $categorias[] = 'Cadena con una enumeración';
        }

        // 5. Cadena con un número decimal
        if (preg_match('/^\d+\.\d+$/', $texto)) {
            $categorias[] = 'Cadena con un número decimal';
        }

        // 6. Cadena con un único número impar
        if (preg_match('/^\d*[13579]$/', $texto)) {
            $categorias[] = 'Cadena con un único número impar';
        }

        // 7. Número de teléfono
        if (preg_match('/^\+?\d{2}\s?[6789]\d{8}$/', $texto)) {
            $categorias[] = 'Número de teléfono';
        }

        // 8. Número del DNI
        if (preg_match('/^\d{8}[A-Z]$/', $texto)) {
            $categorias[] = 'Número del DNI';
        }

        // 9. Contraseña
        if (preg_match('/^(?=.*[0-9]{2})(?=.*[A-Z])(?=.*[\W_]{3}).{8,20}$/', $texto)) {
            $categorias[] = 'Contraseña válida';
        }

        // 10. Formato desconocido
        if (empty($categorias)) {
            $categorias[] = 'Formato desconocido';
        }

        return $categorias;
    }

    // Si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $textos = $_POST['texts'];
        $seleccionado = $_POST['selected_text'];
        $nombreImagen = $_FILES['image']['name'];
        $directorioImg = 'img/';

        // Crear carpeta img si no existe
        if (!file_exists($directorioImg)) {
            mkdir($directorioImg, 0777, true);
        }

        // Guardar imagen con el nombre de la cadena seleccionada
        $textoSeleccionado = $textos[array_search($seleccionado, array_keys($_POST['texts']))];
        $nombreImagenGuardada = $directorioImg . preg_replace('/[^a-zA-Z0-9]/', '_', $textoSeleccionado) . '.' . pathinfo($nombreImagen, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], $nombreImagenGuardada);

        // Mostrar los resultados
        echo "<h2>Resultado de la Validación</h2>";
        echo '<table border="1">';
        echo '<tr><th>Texto</th><th>Categorías</th></tr>';
        foreach ($textos as $texto) {
            echo '<tr><td>' . htmlspecialchars($texto) . '</td>';
            echo '<td>' . implode(', ', clasificarTexto($texto)) . '</td></tr>';
        }
        echo '</table>';

        echo "<h2>Imagen Subida</h2>";
        echo '<img src="' . htmlspecialchars($nombreImagenGuardada) . '" alt="Imagen subida" style="max-width: 300px;"><br><br>';
    }
    ?>

    <!-- Mostrar el formulario solo si no se ha enviado aún -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="text1">Texto 1:</label>
        <input type="text" id="text1" name="texts[]" required><br>

        <label for="text2">Texto 2:</label>
        <input type="text" id="text2" name="texts[]"><br>

        <label for="text3">Texto 3:</label>
        <input type="text" id="text3" name="texts[]"><br>

        <label for="text4">Texto 4:</label>
        <input type="text" id="text4" name="texts[]"><br>

        <label for="text5">Texto 5:</label>
        <input type="text" id="text5" name="texts[]"><br>

        <label for="text6">Texto 6:</label>
        <input type="text" id="text6" name="texts[]"><br>

        <label for="text7">Texto 7:</label>
        <input type="text" id="text7" name="texts[]"><br><br>

        <label for="image">Subir imagen:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <label for="selected_text">Selecciona una cadena para guardar la imagen:</label>
        <select id="selected_text" name="selected_text">
            <option value="text1">Texto 1</option>
            <option value="text2">Texto 2</option>
            <option value="text3">Texto 3</option>
            <option value="text4">Texto 4</option>
            <option value="text5">Texto 5</option>
            <option value="text6">Texto 6</option>
            <option value="text7">Texto 7</option>
        </select><br><br>

        <input type="submit" value="Validar y Subir">
    </form>
</body>
</html>
