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
            $this->rellenarButacas(); //incluimos array para las butacas
            //$this->llenarArrayConButacas();
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

        public function setButacas($butacas){
            $this->_butacas = $butacas;
        }
        
        public function getButacas(){
            return $this->_butacas;
        }

        /*public function llenarArrayConButacas(){
            for($i = 0; $i < $this->_filas; $i++){
                for($j = 0; $j < $this->_columnas; $j++){
                    $this->_butacas[$i][$j] = new Butaca($i+1, $j+1);
                }
            }
        }*/

        public function rellenarButacas(){
            $fila = $this->_filas;
            for($i = 0; $i < $this->_filas; $i++){
                $letra = ord('A');
                for($j = 0; $j < $this->_columnas; $j++){
                    $this->_butacas[$i][$j] = new Butaca($fila, $letra++);
                }
                $fila --;             
            }
        }
        /**
         * Devuelve un objeto butaca segun la fila y la letra
         * @param Int $fila
         * @param Char $letra
         * @return Butaca Donde sentamos al espectador
         */
        public function getButaca($fila, $letra){
            $fil = $this->getFilas() - $fila;
            $col = ord($letra) - ord('A');
            return $this->_butacas[$fil][$col];
        }

        public function sentar($fila, $letra, Espectador $e){
            $this->getButaca($fila,$letra)
                 ->setEspectador($e);
        }

        public function printButacas(){
            echo "<table>";
                for($i = 0; $i < $this->getFilas(); $i++){
                    echo "<tr>";
                    for($j = 0; $j < $this->getColumnas(); $j++){
                        $butaca = $this->_butacas[$i][$j];
                        $ocupado = ($butaca->ocupado()) ? "<td style=background-color:red;><p style=color:white>Ocupada</p></td>":
                        "<td style=background-color:blue;><p style=color:white;>Libre</p></td>";
                        //"**":"__"  ==>> esta es otra manera de poner la condición de si está ocupada o disponible la butaca en la linea anterior después de ?
                        $b = "{$butaca->getFila()}".chr($butaca->getLetra()).$ocupado."</td>";
                        echo "<td>$b</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";
        }

        /**
         * @param Int numEspectadores
         * @param Int dineroMax
         * @param Char arrayNombres
         */
        require_once 'espectador.php';
        function generarEspectadoresRandom(Espectador $newEspect){
            $numEspect = $this->getEspectador();
            $dinero = $this->getDinero();
            for(rand($numEspect($min=0), $numEspect($max=null)){
                
            }

            
        }
        
        /*
        public function haySitioButaca($filas, $letra){

        }*/

    }
    /*echo chr(65); esto es para convertir un número en letra
    function insertLetras($l){ ==>> imprimir el abecedario con las letras que solicitemos
        for($i = 0; $i < $l; $i++){
            $letra = chr(ord('A')+$i);
            echo $letra;
        }
    }
    abecedario(11); ==>> letras que queremos imprimir*/
?>