<?php

    /**
     * @author xavifm
     * Información del espectador
     */

    Class Espectador{
        //Propiedades
        /** @var integer $_id Representa el número de jugador */
        private $_nombre;
        /** @var integer $_id Representa el número de jugador */
        private $_edad;
        /** @var integer $_id Representa el número de jugador */
        private $_dinero;

        public function __construct($nombre, $edad = null, $dinero = 0){
            $this->_nombre = $nombre;
            $this->_edad = $edad;
            $this->_dinero = $dinero; 
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->_nombre;
        }

        public function setEdad($edad){
            $this->_edad = $edad;
        }

        public function getEdad(){
            return $this->_edad;
        }

        public function setDinero($dinero){
            $this->_dinero = $dinero;
        }

        public function getDinero(){
            return $this->_dinero;
        }

        /**
         * pagar entrada 
         * @param $precio 
         */

        public function pagarEntrada($precio){
            return $this->_dinero -= $precio;
        }

        /**
         * @param $edadMinima
         * si el espectador tiene la edad para ver la película
         */

        public function aptoEdad($edadMinima){
            return $this->_edad < $edadMinima;
        }

        /**
         * @param $precioEntrada
         * Coste de la entrada
         */
        public function tieneDinero($precioEntrada){
            return $this->_dinero > $precioEntrada;
        }

        /**
         * @param $info
         * información del espectador
         */
        public function info(){
            //imprime info del Espectador
        }
    }

?>