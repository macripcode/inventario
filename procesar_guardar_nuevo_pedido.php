<?php
	include 'conexion.php';
	include 'datos_BD.php';

	$estado=$_POST['nuevo_estado'];
	$cliente=$_POST['nuevo_cliente'];
	$codigo_plataforma=$_POST['nuevo_codigo'];
	$descripcion=$_POST['nuevo_descripcion'];
	$material=$_POST['nuevo_material'];
	$color=$_POST['nuevo_color'];
	$plataforma=$_POST['nuevo_plataforma'];
	$sello=$_POST['nuevo_sello'];
	$empaque=$_POST['nuevo_empaque'];
	$talla_34=$_POST['nuevo_talla_34'];
	$talla_35=$_POST['nuevo_talla_35'];
	$talla_36=$_POST['nuevo_talla_36'];
	$talla_37=$_POST['nuevo_talla_37'];
	$talla_38=$_POST['nuevo_talla_38'];
	$talla_39=$_POST['nuevo_talla_39'];
	$talla_40=$_POST['nuevo_talla_40'];
	$total=$_POST['nuevo_total'];
	$fecha_entrega=$_POST['nuevo_entrega'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();
	$con->insertar_pedido(   $estado, 
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
             				 $fecha_entrega);

	$resultado=$con->consultar_pedido_confirmacion($estado,$cliente, $codigo_plataforma,$descripcion,$material,$color,$plataforma,$sello,$empaque,
		                                   $talla_34,$talla_35,$talla_36,$talla_37,$talla_38,$talla_39,$talla_40,$total,$fecha_entrega);

	$numero_filas=mysqli_num_rows($resultado);
	$respuesta="";
	if($numero_filas>=1){
		$respuesta="El pedido se guardo satisfactoriamente";

	}else{
		$respuesta="El pedido no fue almacenado, ingrese nuevamente";
	}
	echo $respuesta;
?>