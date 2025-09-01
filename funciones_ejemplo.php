<?php
//echo sqrt(9); // Raíz cuadrada de 9 es 3
//echo rand(10,20); // Número aleatorio entre 10 y 20
//date_default_timezone_set('America/Argentina/Buenos_Aires');
//echo date("d/m/y H:i:s");

//print "\n";

include 'funcion/funciones.php';
//require();

function hola() {

    echo "hola mundo";
    print "\n";

}

function sumanumeros($num1, $num2) {

    $suma=$num1+$num2;
    return $suma;
}

$numero=12.5;
$numero2=10;
echo suma($numero,$numero2);
?>
