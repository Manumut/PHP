<?php
    class Vehiculo{
        public $nombre;
        public $tipo;
        public $peso;

        public function __construct($n="",$t="",$p=0) {
            $this->nombre=$n;
            $this->tipo=$t;
            $this->peso=$p;
        }


        public function set_nombre($n){
            $this->nombre=$n;
        }
        public function get_nombre($n){
            $this->nombre=$n;
        }

        public function set_tipo($t){
            $this->tipo=$t;
        }
        public function get_tipo($t){
            $this->tipo=$t;
        }
        
        public function set_peso($p){
            $this->peso=$p;
        }
        public function get_peso($p){
            $this->peso=$p;
        }

        public function __toString(){
            $str ="Me llamo ".$this->set_nombre()." soy del tipo ".$this->set_tipo()." y peso ".$this->set_peso();
            return $str;
        }



    }

    
?>