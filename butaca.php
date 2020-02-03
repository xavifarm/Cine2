<?php
     /**
     * @author xavifm
     * Información de las butacas
     */

    Class Butaca{
        //Propiedades
        /** @var Char $_fila el numero de fila de la butaca*/
        private $_fila;
        /** @var Int $_letra el numero de columna de la butaca*/
        private $_letra;
        /** @var Espectador $_espectador quien ocupa la butaca*/
        private $_espectador;

        /**
         * Constructor Butaca
         * @param Char $letra
         * @param Int $fila
         */
        public function __construct($fila, $letra){
            $this->_fila = $fila;
            $this->_letra = $letra;
            $this->_espectador = null;
        }

        public function setFila(Int $fila){
            $this->fila = $fila;
        }
        
        public function getFila(){
            return $this->_fila;
        }

        public function setLetra($letra){
            $this->_letra = $letra;
        }

        public function getLetra(){
            return $this->_letra;
        }

        public function setEspectador(Espectador $espectador){//se pone Espectador en el parentesis obligando a la funcion a que deba tener un objeto
            $this->_espectador = $espectador;                   // por norma en el set o otras funciones
        }

        public function getEspectador(){
            return $this->_espectador;
        }

        public function ocupado(){
            return !is_null($this->_espectador);
        }

        /**
         * @param $info
         * información de la butaca
         */
        public function info(){
            //imprime info de la butaca
            echo "<hr>La butaca está {$this->ocupada}<br>";
        }

    }

?>