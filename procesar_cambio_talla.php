<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	$talla=$_POST['talla'];	
	$total=$_POST['total'];	
	$cantidad=$_POST['cantidad'];	

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();

	switch ($talla) {
		case '34':
			$con->modificar_talla_34($codigo, $cantidad);			
		break;

		case '35':
			$con->modificar_talla_35($codigo, $cantidad);
		break;

		case '36':
			$con->modificar_talla_36($codigo, $cantidad);
		break;

		case '37':
			$con->modificar_talla_37($codigo, $cantidad);
		break;

		case '38':
			$con->modificar_talla_38($codigo, $cantidad);
		break;

		case '39':
			$con->modificar_talla_39($codigo, $cantidad);
		break;

		case '40':
			$con->modificar_talla_40($codigo, $cantidad);
		break;	
	}

	$con->modificar_total($codigo,$total);
	$con->cerrar();
?>