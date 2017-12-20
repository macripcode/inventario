<?php
	include 'conexion.php';
	include 'datos_BD.php';


	$codigo_pk=$_POST['codigo_pk'];	
	$descripcion_estado=$_POST['descripcion_estado'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->guardar_estado($codigo_pk,$descripcion_estado);
	$con->cerrar();

	echo "Registro modificado con éxito";
?>