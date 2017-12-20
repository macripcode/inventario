<?php
	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	$nuevo_estado=$_POST['estado'];
	$nueva_entrega=$_POST['entrega'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->modificar_estado($codigo, $nuevo_estado);
	$con->modificar_fecha_entrega($codigo, $nueva_entrega);

?>