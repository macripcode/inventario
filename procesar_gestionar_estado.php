<?php
	function pedir_estados(){

		include 'conexion.php';
		include 'datos_BD.php';

		$con=new Conexion($server,$username,$password,$bd);
		$con->conectar();
		$resultado=$con->consultar_gestionar_estado();

		$array_nombre_input[1]="descripcion_estado";
		

		$datos="<tr>
					<td>Estado Pedido</td>					
				</tr>";

		$numero_columnas=mysqli_num_fields($resultado);
		$numero_filas=mysqli_num_rows($resultado);

		while($fila=$resultado->fetch_row()){
			$datos.="<tr>";
			for ($i=1;$i<$numero_columnas;$i++){
				$datos.="<td><input class='in_gestion_clientes' id='".$array_nombre_input[$i]."_".$fila[0]."' value='".$fila[$i]."'/></td>";
			}
			$datos.="<td>
						<button ><span class='icon-floppy-disk btn_editar_estado' id='btn_editar_estado_".$fila[0]."'></span></button>
						<button ><span class='icon-cross btn_eliminar_estado' id='btn_eliminar_estado_".$fila[0]."'></span></button>
					</td>";
			$datos.="</tr>";
		}

		echo $datos;

	}
?>