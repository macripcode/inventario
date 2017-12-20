<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$descripcion=$_POST['descripcion'];	
	$resultado=$con->consultar_cod_plataforma($descripcion);

	$numero_columnas=mysqli_num_fields($resultado);
	$numero_filas=mysqli_num_rows($resultado);	

	$fila=$resultado->fetch_row();
	for ($i=0;$i<$numero_columnas;$i++){ 
		if($i==0)
		{
			$datos['codigo']=$fila[$i];
		}
		if($i==1){
			$datos['plataforma']=$fila[$i];
		}
				
	}

	echo json_encode($datos);
?>