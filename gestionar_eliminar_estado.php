<?php
	include 'conexion.php';
	include 'datos_BD.php';

	$codigo_pk=$_POST['codigo_pk'];	

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con-> eliminar_estado($codigo_pk);
	$con->cerrar();

	echo "Registro eliminado con éxito";
?>