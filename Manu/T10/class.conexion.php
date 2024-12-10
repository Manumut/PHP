<?php
    class Cliente{
        private $bd;
        private $nif;
        private $nom;
        private $edad;
        private $usu;
        private $pass;

        public function __construct(mysqli &$bd, String $n="", String $no="", int $e=0, String $u="", String $p=""){
            $this->bd = $bd;
            $this->nif = $n;
            $this->nom=$no;
            $this->edad=$e;
            $this->usu=$u;
            $this->pass=$p;
        }

        public function get_datos(){
            $sent = "SELECT * FROM cliente;";
            $cons = $this->bd->prepare($sent);

            $cons->bind_result($this->nif, $this->nom,  $this->edad, $this->usu, $this->pass);
            $cons->execute();

            while($cons->fetch())
                echo $this;

            $cons->close();
        }

        public function crearUsu() {
            $sent = "INSERT INTO cliente (nif, nombre, edad, usuario, pass) VALUES (?, ?, ?, ?, ?)";
        
            
            $cons = $this->bd->prepare($sent);
        
            $cons->bind_param('ssiss', $this->nif, $this->nom, $this->edad, $this->usu, $this->pass);
        
            $cons->execute();
        
            // No es necesario usar fetch con un INSERT, simplemente confirmamos la ejecucion
            echo "Cliente creado con éxito.";
        
            $cons->close();
        }
        


        public function __toString(){
            $str= "<br>DNI: ".$this->nif."<br>Nombre: ".$this->nom."<br>Edad: ".$this->edad."<br>Usuario: ".$this->usu."<br>";
            return $str;
        }

        public function __destruct(){
            $this->bd->close();
        }
    }




    class Venta{
        private $bd;
        private $cl;
        private $pro;

        public function __construct(mysqli &$bd, String $c="", String $p=""){
            $this->bd = $bd;
            $this->cl = $c;
            $this->pro=$p;
        }

        public function get_datos(){
            $sent = "SELECT distinct cliente.nombre, producto.descripcion FROM cliente, venta, producto WHERE cliente.nif = venta.cliente AND producto.cod=venta.producto;";
            
            $cons = $this->bd->prepare($sent);

            $cons->bind_result($this->cl, $this->pro);
            $cons->execute();

            while($cons->fetch())
                echo $this;

            $cons->close();
        }
        

        public function __toString(){
            $str= "<br>Producto ".$this->pro."<br>Nombre: ".$this->cl."<br>";
            return $str;
        }

        public function __destruct(){
            $this->bd->close();
        }
    }


        
    
?>