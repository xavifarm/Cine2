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
            $this->rellenarButacas(); //incluimos array para crear las butacas
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
        //se comenta porque se suplira por el método rellenar butacas
        /*public function llenarArrayConButacas(){
            for($i = 0; $i < $this->_filas; $i++){
                for($j = 0; $j < $this->_columnas; $j++){
                    $this->_butacas[$i][$j] = new Butaca($i+1, $j+1);
                }
            }
        }*/

        /**
         * Crear objetos Butaca de la clase butaca con la fila y la letra que corresponda según las 
         * dimensiones de sala y los guarda en el array $this->_butacas.
         * El número de las filas está invertido 
         */
        public function rellenarButacas(){
            $fila = $this->_filas;
            //con este bucle recorremos las filas
            for($i = 0; $i < $this->_filas; $i++){
                //pasamos el caracter ascii a número ( con función ord para poder sumarlo) 
                $letra = ord('A');
                //con este bucle recorremos las columnas
                for($j = 0; $j < $this->_columnas; $j++){
                    //creamos una nueva butaca 
                    $this->_butacas[$i][$j] = new Butaca($fila, $letra);
                    $letra++; // si colocamos (++ delante sería un incremento al número incrementado, así se incrementa 1 cada vez que recorre el bucle)
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
            //buscamos la manera de que $fil sea igual al parametro necesario para encontrar la fila en la que nos queremos sentar
            //y por eso restaremos fila
            $fil = $this->getFilas() - $fila;
            $col = ord($letra) - ord('A');
            return $this->_butacas[$fil][$col];
        }
        public function sentar($fila, $letra, Espectador $e){
            //Necesitamos un objeto Butaca donde sentar al espectador
            $this->getButaca($fila,$letra)//Devuelve un objeto Butaca
                 ->setEspectador($e);//sentamos al espectador
        }
        public function printButacas(){
            echo "<table>";
                for($i = 0; $i < $this->getFilas(); $i++){
                    echo "<tr>";
                    for($j = 0; $j < $this->getColumnas(); $j++){
                        $butaca = $this->_butacas[$i][$j];
                        $ocupado = ($butaca->ocupado()) ? "class= 'ocupado'" : "class = libre";
                        // ? el interrogante representa lo mismo que la condición "if else"
                        //"**":"__"  ==>> esta es otra manera de poner la condición de si está ocupada o disponible la butaca en la linea anterior después de ?
                        $b = "{$butaca->getFila()}".$butaca->getLetra()."</td>";
                        echo "<td $ocupado>$b</td>";
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
        
        function generarEspectadoresRandom($numEspectadores, $nombres, $edadMinima,$dinero){
            //número de nombres disponibles (de 0 a n-1)
            $numNombres = count($nombres)-1;
            //array para guardar los espectadores generados
            $butacasOcupadas = array();
            $i=0;
            //llenamos el array con nuevos espectadores random
            while($i < $numEspectadores){
                //creamos las propiedades de forma aleatoria
                $d = rand(0,$dinero);
                $e = rand($edadMinima, 100);
                $n = $nombres[rand(0,$numNombres)];
                //creamos un nuevo espectador y lo añadimos al array
                $espectadorRandom = new Espectador($n, $e, $d);
                //generamos una fila y una letra(columna) de forma aleatoria para sentar a los espectadores
                $filaRand = rand(1, $this->_filas);
                $letraRand = chr(rand(65, $this->_columnas+65-1));
                //si el asiento está ocupado cambiamos el asiento
                if(!$this->getButaca($filaRand, $letraRand)->ocupado()){
                    $butacasOcupadas[$i] = $this->getButaca($filaRand,$letraRand);
                    $this->sentar($filaRand, $letraRand, $espectadorRandom);
                    $i++;
                }
            }
            return $butacasOcupadas;
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