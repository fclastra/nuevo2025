<?php
/*
20250409-Gabriel: 
20250408-Fabio: En la linea 32....
*/
$dia=3 ;
$nombre="Fabio";

if ($dia ==1) {
    echo "El día es Lunes";
} elseif ($dia== 2) {
    echo "El día es Martes";
} elseif ($dia== 3) {
    echo "El día es Miércoles";
} elseif ($dia== 4) {
    echo "El día es Jueves";
}else{
    echo "día inválido";
} 
?>

<?php

$dia = 7 ;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2 :
        echo "Martes";
        break;
    case 3 :
        echo "Miercoles";
        break;
    case 4 :
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6 :
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "El día de la semana es incorrecto";
}

?>