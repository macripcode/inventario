<?php

	include 'conexion.php';
	include 'datos_BD.php';
	
	$codigo_material=$_POST['codigo_material'];
	$descripcion_material=$_POST['descripcion_material'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$resultado=$con->comprobar_existencia_material($codigo_material,$descripcion_material);
	$respuesta="";


	if((mysqli_num_rows($resultado))>0){
		$respuesta="Ya exíste un registro con el material ingresado";
	}else{
		$con->gestionar_insertar_material($codigo_material,$descripcion_material);
		$respuesta="Material ingresado con éxito.";
	}

	$con->cerrar();

	echo $respuesta;

?>