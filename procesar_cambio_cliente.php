<?php

	include 'conexion.php';
	include 'datos_BD.php';


	$codigo=$_POST['codigo'];
	$cliente=$_POST['cliente'];
	$sello=$_POST['sello'];
	$empaque=$_POST['empaque'];	

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();	
	$con->modificar_cliente($codigo, $cliente);
	$con->modificar_sello($codigo, $sello);
	$con->modificar_empaque($codigo, $empaque);

?>