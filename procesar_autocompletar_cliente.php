<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$cliente=$_POST['cliente'];	
	$resultado=$con->consultar_sello_empaque($cliente);

	$numero_columnas=mysqli_num_fields($resultado);
	$numero_filas=mysqli_num_rows($resultado);	

	$fila=$resultado->fetch_row();
	for ($i=0;$i<$numero_columnas;$i++){ 
		if($i==0)
		{
			$datos['sello']=$fila[$i];
		}
		if($i==1){
			$datos['empaque']=$fila[$i];
		}
				
	}

	echo json_encode($datos);
?>