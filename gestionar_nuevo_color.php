<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo_color=$_POST['codigo_color'];
	$descripcion_color=$_POST['descripcion_color'];


	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$resultado=$con->comprobar_existencia_color($codigo_color,$descripcion_color);

	$respuesta="";


	if((mysqli_num_rows($resultado))>0){
		$respuesta="ya existe un registro con el codigo y color ingresado";
	}else{
		$con->insertar_color($codigo_color,$descripcion_color);
		$respuesta="color ingresado con exito.";
	}

	$con->cerrar();

	echo $respuesta;

?>