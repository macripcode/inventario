<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	
		

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$datos="El pedido no ha sido eliminado.";
	$resultado=$con->consultar_confirmacion_codigo($codigo);
	$numero_filas=mysqli_num_rows($resultado);
	if(0<$numero_filas){
		$con->eliminar_pedido($codigo);

		$resultado=$con->consultar_confirmacion_codigo($codigo);
		$numero_filas=mysqli_num_rows($resultado);
		if(0==$numero_filas){
			$datos="Pedido Eliminado.";			
		}

	}	
	$con->cerrar();

	echo $datos;

?>