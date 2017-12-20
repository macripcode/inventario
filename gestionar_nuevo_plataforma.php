<?php

	include 'conexion.php';
	include 'datos_BD.php';
	
	
	$codigo_plataforma=$_POST['codigo_plataforma'];
	$descripcion_plataforma=$_POST['descripcion_plataforma'];
	$nombre_plataforma=$_POST['nombre_plataforma'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$resultado=$con->comprobar_existencia_plataforma($codigo_plataforma,$descripcion_plataforma,$nombre_plataforma);
	$respuesta="";


	if((mysqli_num_rows($resultado))>0){
		$respuesta="Ya exíste un registro con plataforma ingresada";
	}else{
		$con->gestionar_insertar_plataforma($codigo_plataforma,$descripcion_plataforma,$nombre_plataforma);
		$respuesta="Plataforma ingresada con éxito.";
	}

	$con->cerrar();

	echo $respuesta;

?>