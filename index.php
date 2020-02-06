<!DOCTYPE html>
<html lang=es>
    <head>
<style>
    .ocupado{
        background-color: red;
    }
    .libre{
        background-color: lightgreen;
    }
</style>    
</head>
<body>
<?php
require_once 'cine.php';
require_once 'pelicula.php';
require_once 'espectador.php';
echo "<h2>Datos de la Película en la Sala</h2>";
$peli = new Pelicula("Regreso al futuro", 136 ,7, "Steven Spielberg");
echo $peli->info();
$augusta = new Cine($peli, 8, 8, 7);
//var_dump($augusta);
/*$espectador = new Espectador("Xavi", 40, 100);
$augusta->sentar(6, 'D', $espectador);
$espectador = new Espectador("Pere", 37, 75);
$augusta->sentar(6, 'E', $espectador);*/
echo "<hr>";

//creamos un array de nombres para generar espectadores
$nombres = ['Susana', 'Raúl', 'Delia', 'Xavi', 'Miguel Angel'];
//echo rand(0,count($nombres)-1); //para generar un random del array de nombres
$butacasOcupadas = $augusta->generarEspectadoresRandom(40, $nombres, 17, 52);
//var_dump($butacasOcupadas);
//echo "<hr>";
?>
<h3>Sala del Cine</h3>
<?php
$augusta->printButacas();//se ha pasado como metodo a cine y así se puede llamar desde cine
//se convierte en metodo para cine****************************************
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
<h3>Detalle Espectadores</h3>
<!--imprimir tabla con la información de los espectadores, fila y letra de la butaca-->
<table>
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Dinero</th>
        <th>Fila</th>
        <th>Letra</th>
    </tr>
    <?php
        foreach($butacasOcupadas as $butacaOcupada){
            echo "<tr>
                    <td>{$butacaOcupada->getEspectador()->getNombre()}</td>
                    <td>{$butacaOcupada->getEspectador()->getEdad()}</td>
                    <td>{$butacaOcupada->getEspectador()->getDinero()}</td>
                    <td>{$butacaOcupada->getFila()}</td>
                    <td>{$butacaOcupada->getLetra()}</td>
                  </tr>";
        }

    ?>
</table>
    </body>
</html>