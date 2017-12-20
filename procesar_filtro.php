<?php

	include 'conexion.php';
	include 'datos_BD.php';

	

	$filtro=$_POST['filtro'];
	$patron=$_POST['patron'];

	$con=new Conexion($server,$username,$password,$bd);
	$con->conectar();

	switch ($filtro) {
		case '0':
			$resultado=$con->consultar_pedidos();
		break;

		case '1':
			$resultado=$con->consultar_pedidos_filtro_estado($patron);
		break;

		case '2':
			$resultado=$con->consultar_pedidos_filtro_cliente($patron);
		break;

		case '3':
			$resultado=$con->consultar_pedidos_filtro_codigo_plataforma($patron);
		break;

		case '4':
			$resultado=$con->consultar_pedidos_filtro_descripcion($patron);
		break;

		case '5':
			$resultado=$con->consultar_pedidos_filtro_material($patron);
		break;

		case '6':
			$resultado=$con->consultar_pedidos_filtro_color($patron);
		break;

		case '7':
			$resultado=$con->consultar_pedidos_filtro_plataforma($patron);
		break;		

		case '8':
			$resultado=$con->consultar_pedidos_filtro_sello($patron);
		break;

		case '9':
			$resultado=$con->consultar_pedidos_filtro_empaque($patron);
		break;		
		
	}

	$numero_columnas=mysqli_num_fields($resultado);
	$numero_filas=mysqli_num_rows($resultado);

	$array_nombre_input[1]="buscar_estado";
	$array_nombre_input[2]="buscar_cliente";
	$array_nombre_input[3]="buscar_codigo";
	$array_nombre_input[4]="buscar_descripcion";
	$array_nombre_input[5]="buscar_material";
	$array_nombre_input[6]="buscar_color";
	$array_nombre_input[7]="buscar_plataforma";
	$array_nombre_input[8]="buscar_sello";
	$array_nombre_input[9]="buscar_empaque";
	$array_nombre_input[10]="talla34";
	$array_nombre_input[11]="talla35";
	$array_nombre_input[12]="talla36";
	$array_nombre_input[13]="talla37";
	$array_nombre_input[14]="talla38";
	$array_nombre_input[15]="talla39";
	$array_nombre_input[16]="talla40";		
	$array_nombre_input[17]="total";
	$array_nombre_input[18]="entrega";
	$array_nombre_input[19]="boton_guardar";
	$array_nombre_input[20]="boton_eliminar";

	
	$datos="<table id='tabla_datos'>";
	
	while($fila=$resultado->fetch_row()){
		$datos.="<tr>";

		for ($i=1;$i<$numero_columnas;$i++){

			if($i==1){
				$datos.="<td id='head1' class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_estado' value='".$fila[$i]."'/></td>";
			}

			if($i==2){
				$datos.="<td id='head2' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_cliente' value='".$fila[$i]."'/></td>";
			}

			if($i==3){
				$datos.="<td id='head3' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_codigo' value='".$fila[$i]."'/></td>";
			}

			if($i==4){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_descripcion' value='".$fila[$i]."'/></td>";
			}

			if($i==5){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_material' value='".$fila[$i]."'/></td>";
			}				

			if($i==6){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='buscar_color' value='".$fila[$i]."'/></td>";
			}

			if($i==7){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."'  class='buscar_plataforma' value='".$fila[$i]."'/></td>";
			}

			if($i==8){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."'  class='buscar_sello' value='".$fila[$i]."'/></td>";
			}

			if($i==9){
				$datos.="<td id='head1' class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."'  class='buscar_empaque' value='".$fila[$i]."'/></td>";
			}					

			if($i==10){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==11){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==12){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==13){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==14){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==15){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==16){
				$datos.="<td  class='letra_body'><input  id='".$array_nombre_input[$i]."_".$fila[0]."' class='tallas'  value='".$fila[$i]."'/></td>";
			}

			if($i==17){
				$datos.="<td  class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='total' value='".$fila[$i]."'/></td>";
			}

			if($i==18){
				$datos.="<td  class='letra_body'><input id='".$array_nombre_input[$i]."_".$fila[0]."' class='entrega' value='".$fila[$i]."'/></td>";
			}
										
		}
		$datos.="<td  class='letra_body'><button class='boton_guardar' id='".$array_nombre_input[19]."_".$fila[0]."'><span class='icon-floppy-disk'></span></button></td>
				 <td  class='letra_body'><button class='boton_eliminar' id='".$array_nombre_input[20]."_".$fila[0]."'><span class='icon-cross'></span></button></td>";		
		$datos.="</tr>";
			
	} 


	$datos.="<tr>
				<td class='letra_body'><input id='buscar_estado_0'  class='buscar_estado'/></td>
				<td class='letra_body'><input id='buscar_cliente_0' class='buscar_cliente'/></td>
				<td class='letra_body'><input id='buscar_codigo_0'  class='buscar_codigo'/></td>
				<td class='letra_body'><input id='buscar_descripcion_0' class='buscar_descripcion'/></td>
				<td class='letra_body'><input id='buscar_material_0' class='buscar_material'/></td>
				<td class='letra_body'><input id='buscar_color_0' class='buscar_color'/></td>
				<td class='letra_body'><input id='buscar_plataforma_0'  class='buscar_plataforma' /></td>
				<td class='letra_body'><input id='buscar_sello_0'  class='buscar_sello' /></td>
				<td class='letra_body'><input id='buscar_empaque_0'  class='buscar_empaque' /></td>
				<td class='letra_body'><input id='talla34_0' value='0' class='tallas'  /></td>							
				<td class='letra_body'><input id='talla35_0' value='0' class='tallas'  /></td>						
				<td class='letra_body'><input id='talla36_0' value='0' class='tallas'  /></td>						
				<td class='letra_body'><input id='talla37_0' value='0' class='tallas'  /></td>					
				<td class='letra_body'><input id='talla38_0' value='0' class='tallas'  /></td>					
				<td class='letra_body'><input id='talla39_0' value='0' class='tallas'  /></td>					
				<td class='letra_body'><input id='talla40_0' value='0' class='tallas'  /></td>					
				<td class='letra_body'><input id='total_0' value='0' class='total' /></td>					
				<td class='letra_body'><input id='entrega_0' class='entrega' /></td>
				<td class='letra_body'><button id='boton_guardar_0'><span class='icon-floppy-disk'></span></button></td>
			</tr>
		</table>";


	$file = fopen("archivo.txt", "w");
	fwrite($file, $datos.PHP_EOL);
	fclose($file);

	echo $datos;


?>