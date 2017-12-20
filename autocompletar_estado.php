<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$nombre_estado="O";
	$resultado=$con->consultar_estado($_GET['term']);

	$contador=0;
	while($fila=$resultado->fetch_row()){		
			$arreglo_opciones[$contador]=$fila[0];
			$contador++;
	}

	echo json_encode($arreglo_opciones);
?>