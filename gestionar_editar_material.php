<?php
	include 'conexion.php';
	include 'datos_BD.php';


	$codigo_pk=$_POST['codigo_pk'];	
	$codigo_material=$_POST['codigo_material'];
	$descripcion_material=$_POST['descripcion_material'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->guardar_material($codigo_pk,$codigo_material,$descripcion_material);
	$con->cerrar();

	echo "Registro modificado con éxito";
?>