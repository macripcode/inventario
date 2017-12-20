<?php

	include 'conexion.php';
	include 'datos_BD.php';


	$codigo=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$codigo_plataforma=$_POST['codigo_plataforma'];
	$plataforma=$_POST['plataforma'];	

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();	
	$con->modificar_descripcion($codigo, $descripcion);
	$con->modificar_codigo_plataforma($codigo, $codigo_plataforma);
	$con->modificar_plataforma($codigo, $plataforma);

?>