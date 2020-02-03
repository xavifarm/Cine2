<?php
require_once 'cine.php';
require_once 'pelicula.php';
//require_once 'espectador.php';

$peli = new Pelicula("Regreso al futuro", 136 ,7, "Steven Spielberg");
echo $peli->info();
$augusta = new Cine($peli, 3, 3, 7);
printButacas($augusta);
//var_dump($augusta);

//$arrayButacas = $augusta->getButacas();

function printButacas($augusta){
    $arrayButacas = $augusta->getButacas();
    echo "<table >";
        for($i = 0; $i < $augusta->getFilas(); $i++){
            echo "<tr>";
            for($j = 0; $j < $augusta->getColumnas(); $j++){
                $butaca = $arrayButacas[$i][$j];
                echo "<td>{$butaca->getFila()},{$butaca->getLetra()}</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
}

?>