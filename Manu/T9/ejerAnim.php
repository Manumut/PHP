<?php
    if(isset($_POST["Enviar"])){
            $res = new animal( $_POST["nombre"], $_POST["color"], $_POST["fecha"] );
            echo $res;
    }else{
        ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Introduzca su nombre">
        <br>
        <select name="color">
            <option value="Amarillo">Amarillo</option>
            <option value="Verde">Verde</option>
            <option value="Nergo">Negro</option>
            <option value="Blanco">Blanco</option>
            <option value="Gris">Gris</option>
        </select>
        <br>
        
        <input type="date" name="fecha">
        <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>



    <?php } ?>