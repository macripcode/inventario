<?php

	class Conexion{
	
	private $bd;
	private $user;
	private $password;
	private $server;
	private $con;
	
	
	
	function __construct($server,$username,$password,$bd){  
		
		$this->server=$server;
		$this->username=$username;
		$this->password=$password;		
		$this->bd=$bd;		
	}
	
	function conectar(){
		 $this->con=mysqli_connect($this->server,$this->username,$this->password, $this->bd) 
		 	or die('No se pudo conectar: '.mysql_error($this->con));
		 $this->con->set_charset("utf8");	 	 	 
	}

	
	function ejecutar($query){
		$result = mysqli_query($this->con,$query) or die('Consulta fallida: '.mysqli_error($this->con));
		return $result;
	}

	function cerrar(){
		mysqli_close($this->con);
	}

	

	/*--------insertar color----------*/
	

	/*--------insertar material----------*/
	function insertar_material($material){
		$query="insert into material( `material`) values ('".$material."');";
		$this->ejecutar($query);		
	}

	/*--------insertar plataforma----------*/
	function insertar_plataforma($codigo, $descripcion, $plataforma){
		$query="insert into plataforma values ('".$codigo."', '".$descripcion."', '".$plataforma."');";
		$this->ejecutar($query);		
	}

	
	/*--------insertar pedido-------------*/

	function insertar_pedido($estado, $cliente, $codigo_plataforma, $descripcion, $material, $color, $plataforma, $sello, $empaque,
		                     $talla_34,$talla_35,$talla_36,$talla_37,$talla_38,$talla_39,$talla_40,$total, $fecha_entrega){
		$query="insert into `pedido`(`estado`,
			                         `cliente`,
			                         `codigo_plataforma`,
			                         `descripcion`,
			                         `material`,
			                         `color`,
			                         `plataforma`, 
			                         `sello`, 
			                         `empaque`, 
									 `talla_34`,
									 `talla_35`,
									 `talla_36`,
									 `talla_37`,
									 `talla_38`,
									 `talla_39`,
									 `talla_40`,
									 `total`,
									 `fecha_entrega`) 
                     		 values ('".$estado."','"
                     		 	       .$cliente."','"
                     		 	       .$codigo_plataforma."','"
                     		 	       .$descripcion."','"
                     		 	       .$material."','"
                     		 	       .$color."','"
                     		 	       .$plataforma."','"
                     		 	       .$sello."','"
                     		 	       .$empaque."',"
                     		 	       .$talla_34.","
                     		 	       .$talla_35.","
                     		 	       .$talla_36.","
                     		 	       .$talla_37.","
                     		 	       .$talla_38.","
                     		 	       .$talla_39.","
                     		 	       .$talla_40.","
                     		 	       .$total.",'"
                     		 	       .$fecha_entrega."');";
		$this->ejecutar($query);		
	}

	function consultar_pedido_confirmacion($estado,$cliente, $codigo_plataforma,$descripcion,$material,$color,$plataforma,$sello,$empaque,
		                                   $talla_34,$talla_35,$talla_36,$talla_37,$talla_38,$talla_39,$talla_40,$total,$fecha_entrega){
		$query="select codigo from pedido where estado='".$estado."' and 
		                                        cliente='".$cliente."' and 
		                                        codigo_plataforma='".$codigo_plataforma."' and 
		                                        descripcion='".$descripcion."' and 
		                                        material='".$material."' and 
		                                        color='".$color."' and 
		                                        plataforma='".$plataforma."' and 
		                                        sello='".$sello."' and 
		                                        empaque='".$empaque."' and 
		                                        talla_34=".$talla_34." and 
		                                        talla_35=".$talla_35." and 
		                                        talla_36=".$talla_36." and 
		                                        talla_37=".$talla_37." and 
		                                        talla_38=".$talla_38." and 
		                                        talla_39=".$talla_39." and 
		                                        talla_40=".$talla_40." and 
		                                        total=".$total." and 
		                                        fecha_entrega='".$fecha_entrega."';";
		$resultado=$this->ejecutar($query);
		return $resultado;

	}

	function boton_guardar_pedido($codigo,$estado,$cliente, $codigo_plataforma,$descripcion,$material,$color,$plataforma,$sello,$empaque,
		                          $talla_34,$talla_35,$talla_36,$talla_37,$talla_38,$talla_39,$talla_40,$total,$fecha_entrega){
		
		$query="update pedido set estado ='".$estado."',cliente = '".$cliente."',codigo_plataforma= '".$codigo_plataforma."',
	             descripcion= '".$descripcion."',material= '".$material."',color= '".$color."',plataforma= '".$plataforma."',
	             sello= '".$sello."', empaque= '".$empaque."', talla_34= ".$talla_34.", talla_35= ".$talla_35.",
			     talla_36= ".$talla_36.", talla_37= ".$talla_37.", talla_38= ".$talla_38.", talla_39= ".$talla_39.",
			     talla_40= ".$talla_40.", total= ".$total.", fecha_entrega= '".$fecha_entrega."' where codigo=".$codigo.";";
	    $this->ejecutar($query);
	}

	function consultar_confirmacion_codigo($codigo){
		$query="select * from pedido where codigo=".$codigo.";";
		$resultado=$this->ejecutar($query);
		return $resultado;

	}

	function eliminar_pedido($codigo){
		$query="delete from pedido where codigo=".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_estado($codigo, $nuevo_valor){
		$query="update pedido set estado = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_cliente($codigo, $nuevo_valor){
		$query="update pedido set cliente = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_codigo_plataforma($codigo, $nuevo_valor){
		$query="update pedido set codigo_plataforma = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_descripcion($codigo, $nuevo_valor){
		$query="update pedido set descripcion = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_material($codigo, $nuevo_valor){
		$query="update pedido set material = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_color($codigo, $nuevo_valor){
		$query="update pedido set color = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_plataforma($codigo, $nuevo_valor){
		$query="update pedido set plataforma = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_sello($codigo, $nuevo_valor){
		$query="update pedido set sello = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_empaque($codigo, $nuevo_valor){
		$query="update pedido set empaque = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_34($codigo, $nuevo_valor){
		$query="update pedido set talla_34 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_35($codigo, $nuevo_valor){
		$query="update pedido set talla_35 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_36($codigo, $nuevo_valor){
		$query="update pedido set talla_36 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_37($codigo, $nuevo_valor){
		$query="update pedido set talla_37 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_38($codigo, $nuevo_valor){
		$query="update pedido set talla_38 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_39($codigo, $nuevo_valor){
		$query="update pedido set talla_39 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_talla_40($codigo, $nuevo_valor){
		$query="update pedido set talla_40 = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_total($codigo, $nuevo_valor){
		$query="update pedido set total = ".$nuevo_valor." where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function modificar_fecha_entrega($codigo, $nuevo_valor){
		$query="update pedido set fecha_entrega = '".$nuevo_valor."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function consultar_pedidos(){
		$query="select `codigo`,`estado`, `cliente`, `codigo_plataforma`, `descripcion`, `material`, `color`, `plataforma`, `sello`, `empaque`,
		       `talla_34`, `talla_35`, `talla_36`, `talla_37`, `talla_38`, `talla_39`, `talla_40`, `total`, `fecha_entrega` from pedido order by codigo asc;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	//----------------Filtros Consulta de pedidos------------------------

	function consultar_pedidos_filtro_estado($patron){
		$query="select * from pedido where estado like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_cliente($patron){
		$query="select * from pedido where cliente like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_codigo_plataforma($patron){
		$query="select * from pedido where codigo_plataforma like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_descripcion($patron){
		$query="select * from pedido where descripcion like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_material($patron){
		$query="select * from pedido where material like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_color($patron){
		$query="select * from pedido where color like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_plataforma($patron){
		$query="select * from pedido where plataforma like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_sello($patron){
		$query="select * from pedido where sello like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_pedidos_filtro_empaque($patron){
		$query="select * from pedido where empaque like'%".$patron."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	//----------------Filtros Consulta de pedidos------------------------

	//Funciones estado_pedido
	function consultar_estado($nombre_estado){
		$query="select descripcion from estado_pedido where descripcion like '%".$nombre_estado."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_cliente($nombre_cliente){
		$query="select cliente from cliente where cliente like '%".$nombre_cliente."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	//funciones plataforma

	function consultar_descripcion($nombre_descripcion){
		$query="select descripcion from plataforma where descripcion like '%".$nombre_descripcion."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_codigo_plataforma($codigo){
		$query="select codigo from plataforma where codigo like '%".$codigo."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_cod_plataforma($descripcion){
		$query="select codigo, plataforma from plataforma where descripcion='".$descripcion."';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_descripcion_plataforma($codigo){
		$query="select descripcion, plataforma from plataforma where codigo='".$codigo."';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_sello_empaque($cliente){
		$query="select sello, empaque from cliente where cliente='".$cliente."';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_material($nombre_material){
		$query="select material from material where material like '%".$nombre_material."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function consultar_color($nombre_color){
		$query="select color from color where color like '%".$nombre_color."%';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	/*-------------CRUD Cliente-----------*/

	function insertar_cliente($cliente, $sello, $empaque){
		$query="insert into `cliente`(`cliente`, `sello`, `empaque`) values ('".$cliente."','".$sello."', '".$empaque."' );";
		$this->ejecutar($query);		
	}
	

	function borrar_cliente(){
		$query="";
		$resultado=$this->ejecutar($query);
	}
	
	function consultar_clientes(){
		$query="select * from cliente;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}


	function consultar_cliente_codigo($codigo_cliente){
		$query="select cliente, sello, empaque from cliente where codigo='".$codigo_cliente."';";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}
	
	function modificar_gestionar_cliente($codigo, $nombre, $sello, $empaque){
		$query="update cliente set cliente = '".$nombre."', sello ='".$sello."', empaque='".$empaque."' where codigo =".$codigo.";";
		$this->ejecutar($query);		
	}

	function eliminar_gestionar_cliente($codigo){
		$query="delete from cliente where codigo='".$codigo."';";
		$this->ejecutar($query);		
	}

	/*-------------CRUD Cliente-----------*/
	/*-------------CRUD Color-------------*/
	function consultar_gestionar_color(){
		$query="select * from color;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function comprobar_existencia_color($codigo, $color){
		$query="select * from color where codigo='".$codigo."' and color='".$color."';";
		$resultado=$this->ejecutar($query);
		return $resultado;	
	}

	function insertar_color($codigo, $color){
		$query="insert into  `color` (`codigo`, `color`) values ('".$codigo."','".$color."');";
		$this->ejecutar($query);		
	}

	function guardar_color($codigo_pk,$codigo, $color){
		$query="update color set codigo='".$codigo."', color='".$color."' where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	function eliminar_color($codigo_pk){
		$query="delete from color where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}
	/*-------------CRUD Color-------------*/

	/*-------------CRUD Estado-------------*/
	function consultar_gestionar_estado(){
		$query="select * from estado_pedido;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function comprobar_existencia_estado($estado){
		$query="select * from estado_pedido where descripcion='".$estado."';";
		$resultado=$this->ejecutar($query);
		return $resultado;	
	}

	function insertar_estado($estado){
		$query="insert into estado_pedido (`descripcion`) values ('".$estado."');";
		$this->ejecutar($query);		
	}

	function guardar_estado($codigo_pk,$estado){
		$query="update estado_pedido set descripcion='".$estado."' where codigo=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	function eliminar_estado($codigo_pk){
		$query="delete from estado_pedido where codigo=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	/*-------------CRUD Estado-------------*/

	/*-------------CRUD Material-------------*/
	function consultar_gestionar_material(){
		$query="select * from material;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function comprobar_existencia_material($codigo, $material){
		$query="select * from material where codigo='".$codigo."' and material='".$material."';";
		$resultado=$this->ejecutar($query);
		return $resultado;	
	}

	function gestionar_insertar_material($codigo, $material){
		$query="insert into  `material` (`codigo`, `material`) values ('".$codigo."','".$material."');";
		$this->ejecutar($query);		
	}

	function guardar_material($codigo_pk,$codigo_material,$descripcion_material){
		$query="update material set codigo=".$codigo_material.", material='".$descripcion_material."' where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	function eliminar_material($codigo_pk){
		$query="delete from material where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	/*-------------CRUD Material-------------*/

	/*-------------CRUD Plataforma-------------*/
	function consultar_gestionar_plataforma(){
		$query="select * from plataforma;";
		$resultado=$this->ejecutar($query);
		return $resultado;
	}

	function comprobar_existencia_plataforma($codigo, $descripcion, $nombre_plataforma){
		$query="select * from plataforma where codigo='".$codigo."' and descripcion='".$descripcion."'  and plataforma='".$nombre_plataforma."';";
		$resultado=$this->ejecutar($query);
		return $resultado;	
	}

	function gestionar_insertar_plataforma($codigo, $descripcion, $nombre_plataforma){
		$query="insert into  `plataforma` (`codigo`, `descripcion`,`plataforma`) values ('".$codigo."','".$descripcion."','".$nombre_plataforma."');";
		$this->ejecutar($query);		
	}

	function guardar_plataforma($codigo_pk,$codigo_plataforma,$descripcion_plataforma, $nombre_plataforma){
		$query="update plataforma set codigo='".$codigo_plataforma."', descripcion='".$descripcion_plataforma."', plataforma='".$nombre_plataforma."' where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	function eliminar_plataforma($codigo_pk){
		$query="delete from plataforma where codigo_pk=".$codigo_pk.";";
		$this->ejecutar($query);
	}

	/*-------------CRUD Plataforma-------------*/



	


	

	
	



}

	

?>