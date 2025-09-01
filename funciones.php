<?php
//funcion Suma
function suma($numero1,$numero2) {
    $suma=$numero1+$numero2;
    return $suma;
}

//formato numero
function formatonumero($numero){
	$numeroformato=number_format($numero, 2, ',', '.');
	return $numeroformato;
}

//calcula edad
function CalculaEdad( $fecha ) {
	list($Y,$m,$d) = explode("-",$fecha);
	return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}

?>