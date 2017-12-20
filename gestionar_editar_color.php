<?php
	include 'conexion.php';
	include 'datos_BD.php';

	$codigo_pk=$_POST['codigo_pk'];
	$codigo_color=$_POST['codigo_color'];
	$descripcion_color=$_POST['descripcion_color'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con-> guardar_color($codigo_pk,$codigo_color, $descripcion_color);
	$con->cerrar();

	echo "Registro modificado con éxito";
?>