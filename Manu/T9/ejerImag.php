<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Imagen{
        private $src;
        private $border;
        private $ruta_images;

        public function __constructor($nom, $bor=0, $ruta){
            $this->src=$nom;
            $this->border=$bor;
            $this->ruta_images=$ruta;
        }


        public function __toString(){
            $res = "<img src=".$src." alt=".$border.">";

            return $res;

        }

    }

    if(isset($_POST["Enviar"])){

    
    }else{
        ?>
        
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="enlace" placeholder="Que imagen es ">
            <br>
            <input type="number" name="ancho" placeholder="Que ancho quieres">
            <br>
            <input type="submit" name="Enviar" value="Enviar">
        </form>

    <?php } ?>
    
</body>
</html>


