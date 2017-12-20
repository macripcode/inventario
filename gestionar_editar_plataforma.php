<?php
	include 'conexion.php';
	include 'datos_BD.php';						  


	$codigo_pk=$_POST['codigo_pk'];	
	$codigo_plataforma=$_POST['codigo_plataforma'];
	$descripcion_plataforma=$_POST['descripcion_plataforma'];
	$nombre_plataforma=$_POST['nombre_plataforma'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->guardar_plataforma($codigo_pk,$codigo_plataforma,$descripcion_plataforma,$nombre_plataforma);
	$con->cerrar();

	echo "Registro modificado con éxito";
?>