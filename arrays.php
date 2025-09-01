<?php
$servidor = "localhost";
$usuario = "usuario";
$clave = "clave";
$basededatos = "tecno3fphp";

$conexion = mysqli_connect($servidor, $usuario, $clave) or die ("No se conecto al servidor");

$db = mysqli_select_db($conexion, $basededatos) or die ("No se conecto a la base");

$sql = "select * from seg_usuarios";
$result = mysqli_query($conexion, $sql);
while ($rstlogin = mysqli_fetch_array($result)) {

    echo $rstlogin["nombre"]."\n";

}
echo var_dump[$rstlogin]; //0 => "fabio", 1 => "carlos", 2 => "pepe"
?>

<?php
$mi_array = array(23,45,76,23,65);

echo $mi_array[2];
?>
//El método es similar a:
<?php
$mi_array[0]=23;
$mi_array[l]=45;
$mi_array[2]=76;
$mi_array[3]=23;
$mi_array[4]=45;
?>
