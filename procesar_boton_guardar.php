<?php

	include 'conexion.php';
	include 'datos_BD.php';

	$codigo=$_POST['codigo'];
	$estado=$_POST['estado'];
	$cliente=$_POST['cliente'];
	$codigo_plataforma=$_POST['codigo_plataforma'];
	$descripcion=$_POST['descripcion'];
	$material=$_POST['material'];
	$color=$_POST['color'];
	$plataforma=$_POST['plataforma'];
	$sello=$_POST['sello'];
	$empaque=$_POST['empaque'];
	$talla_34=$_POST['talla_34'];
	$talla_35=$_POST['talla_35'];
	$talla_36=$_POST['talla_36'];
	$talla_37=$_POST['talla_37'];
	$talla_38=$_POST['talla_38'];
	$talla_39=$_POST['talla_39'];
	$talla_40=$_POST['talla_40'];
	$total=$_POST['total'];
	$entrega=$_POST['entrega'];
		

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->boton_guardar_pedido( $codigo,
							    $estado,
								$cliente,
								$codigo_plataforma,
								$descripcion,
								$material,
								$color,
								$plataforma,
								$sello,
								$empaque,
	                            $talla_34,
	                            $talla_35,
	                            $talla_36,
	                            $talla_37,
	                            $talla_38,
	                            $talla_39,
	                            $talla_40,
	                            $total,
	                            $entrega
	                          );

	$resultado=$con->consultar_confirmacion_codigo($codigo);
	$numero_columnas=mysqli_num_fields($resultado);
	$datos="se han guardado los siguientes datos: ";
	while($fila=$resultado->fetch_row()){
		for ($i=0;$i<$numero_columnas;$i++){ 
			$datos.=$fila[$i]." , ";		
		}		
	}
	$con->cerrar();

	echo $datos;

?>