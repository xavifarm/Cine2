<?php
    /**
     * @author xavifm
     * Información del cine
     */
    require_once 'butaca.php';
    Class Cine{
        //Propiedades
        /** @var Int $_butacas cantidad de butacas que tiene la sala*/
        private $_butacas;
        /** @var Int $_pelicula Película que se está emitiendo en el cine*/
        private $_pelicula;
        /** @var Bool $_fila Cantidad de filas que tiene la sala*/
        private $_filas;
        /** @var Boolean $_columna Cantidad de columnas que tiene la sala*/
        private $_columnas;
        /** @var Boolean $_precio Coste de entrada a la película*/
        private $_precio;


        public function __construct(Pelicula $pelicula, $filas, $columnas, $precio){
            $this->_pelicula = $pelicula;
            $this->_filas = $filas;
            $this->_columnas = $columnas;
            $this->_precio = $precio;
            //$this->_rellenarButacas(); //incluimos array para las butacas
            $this->llenarArrayConButacas();
        }

        public function setPelicula($pelicula){
            $this->_pelicula = $pelicula;
        }
        
        public function getPelicula(){
            return $this->_pelicula;
        }

        public function setFilas($filas){
            $this->_filas = $filas;
        }
        
        public function getFilas(){
            return $this->_filas;
        }

        public function setColumnas($columnas){
            $this->_columnas = $columnas;
        }
        
        public function getColumnas(){
            return $this->_columnas;
        }

        public function setPrecio($precio){
            $this->_precio = $precio;
        }
        
        public function getPrecio(){
            return $this->_precio;
        }

        public function setButaca($butacas){
            $this->_butacas = $butacas;
        }
        
        public function getButacas(){
            return $this->_butacas;
        }

        public function llenarArrayConButacas(){
            for($i = 0; $i < $this->_filas; $i++){
                for($j = 0; $j < $this->_columnas; $j++){
                    $this->_butacas[$i][$j] = new Butaca($i+1, $j+1);
                }
            }
        }

        private function rellenarButacas(){

        }

        public function haySitioButaca($filas, $letra){

        }

    }

?>