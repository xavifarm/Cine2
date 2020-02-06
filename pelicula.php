<?php
     /**
     * @author xavifm
     * Información de la película
     */

    Class Pelicula{
        //Propiedades
        /** @var integer $_título Nombre de la película*/
        private $_titulo;
        /** @var integer $_duracion Tiempo duración de la película*/
        private $_duracion;
        /** @var integer $_edadMinima Edad permitida para ver la película*/
        private $_edadMinima;
        /** @var integer $_director El nombre del Director de la película*/
        private $_director;

        //se crea la funcion constructor para incluir todas las propiedades y generar una película en este caso
        public function __construct($titulo, $duracion, $edadMinima, $director){
            $this->_titulo = $titulo;
            $this->_duracion = $duracion;
            $this->_edadMinima = $edadMinima;
            $this->_director = $director;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        public function getTitulo(){
            return $this->_titulo;
        }

        public function setDuracion($duracion){
            $this->duracion = $duracion;
        }
        
        public function getDuracion(){
            return $this->_duracion;
        }

        public function setEdadMinima($edadMinima){
            $this->edadMinima = $edadMinima;
        }
        
        public function getEdadMinima(){
            return $this->_edadMinima;
        }

        public function setDirector($director){
            $this->director = $director;
        }
        
        public function getDirector(){
            return $this->_director;
        }

        public function info(){
            //imprimir información de la película
            $info = "<hr>La película es {$this->_titulo}<br>".
                 "que tiene una duración de {$this->_duracion} minutos<br>".
                 "y es para mayores de {$this->_edadMinima} años<br>".
                 "del director {$this->_director}";
                 return $info;
        }
    }
?>