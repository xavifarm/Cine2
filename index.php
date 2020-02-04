<style>

</style>
<?php
require_once 'cine.php';
require_once 'pelicula.php';
require_once 'espectador.php';
echo "<h2>Datos de la Película en la Sala</h2>";
$peli = new Pelicula("Regreso al futuro", 136 ,7, "Steven Spielberg");
echo $peli->info();
$augusta = new Cine($peli, 8, 8, 7);
//var_dump($augusta);
$espectador = new Espectador("Xavi", 40, 100);
$augusta->sentar(6, 'D', $espectador);

echo "<hr>";
$augusta->printButacas();//se ha pasado como metodo a cine y así se puede llamar desde cine

/*function printSala($augusta){
    $arrayButacas = $augusta->getButacas();
    //$contadorFila = $this->_filas;
    echo "<table>";
        for($i = $augusta->getFilas(); $i >= 0 ; $i--){
            echo "<tr>";
            for($j = 0; $j < $augusta->getColumnas(); $j++){
                $butaca = $arrayButacas[$i][$j];
                echo "<td>{$butaca->getFila()},{$butaca->getLetra()}</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
}*/
echo "<br>";
echo "+++++PANTALLA+++++";
echo "<hr>";

?>    
