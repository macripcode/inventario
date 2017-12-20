<?php

	include 'conexion.php';
	include 'datos_BD.php';
	
	$descripcion_estado=$_POST['descripcion_estado'];


	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$resultado=$con->comprobar_existencia_estado($descripcion_estado);
	$respuesta="";


	if((mysqli_num_rows($resultado))>0){
		$respuesta="ya existe un registro con el estado ingresado";
	}else{
		$con->insertar_estado($descripcion_estado);
		$respuesta="estado de pedido ingresado con éxito.";
	}

	$con->cerrar();

	echo $respuesta;

?>