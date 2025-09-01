<?php
/*
$numeros=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

$filtroPares=function($numero) {
    return $numero %2 === 0;
};

$resultado=array_filter($numeros,$filtroPares);

print_r($resultado);

//$edad=18;
//print "<p>Edad:".$edad."</p>\n";
*/

//$mivariable=rand(1215,1320);
//print_r($mivariable);

function numerosAleatoriosUnicos($x, $z, $y) {
    /*
    calcula numeros aleatorios dentro de un rango.
    Uso: numerosAleatoriosUnicos(cantidad, inicio, fin);
    */
    if ($x > ($y - $z + 1)) {
        throw new Exception("No hay suficientes números únicos en el rango.");
    }

    $numeros = [];
    while (count($numeros) < $x) {
        $num = rand($z, $y);
        if (!in_array($num, $numeros)) {
            $numeros[] = $num;
        }
    }
    return $numeros;
}

$resultado=numerosAleatoriosUnicos(20,1,100);
print_r($resultado);

?>