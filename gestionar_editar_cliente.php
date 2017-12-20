<?php

include 'conexion.php';
include 'datos_BD.php';


$codigo_cliente=$_POST['codigo_cliente'];
$nombre_cliente=$_POST['nombre_cliente'];
$sello_cliente=$_POST['sello_cliente'];
$empaque_cliente=$_POST['empaque_cliente'];

//echo $codigo_cliente." ".$nombre_cliente." ".$sello_cliente." ".$empaque_cliente;


$con=new Conexion($server,$username,$password,$bd);
$con->conectar();
$con->modificar_gestionar_cliente($codigo_cliente, $nombre_cliente, $sello_cliente, $empaque_cliente);
$resultado=$con->consultar_cliente_codigo($codigo_cliente);

$fila=$resultado->fetch_row();

$res="Los datos no han sido modificados correctamente";
if((strcmp($fila[0],$nombre_cliente)==0)&&(strcmp($fila[1],$sello_cliente)==0)&&(strcmp($fila[2],$empaque_cliente)==0)){
	$res="Los datos han sido modificados correctamente";
}

echo $res;

?>