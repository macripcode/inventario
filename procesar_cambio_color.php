<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	$color=$_POST['color'];		

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();	
	$con->modificar_color($codigo, $color);
	$con->cerrar();
?>