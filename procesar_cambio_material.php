<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	$material=$_POST['material'];		

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();	
	$con->modificar_material($codigo, $material);
	$con->cerrar();
?>