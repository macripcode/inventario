<?php
	function pedir_plataforma(){

		include 'conexion.php';
		include 'datos_BD.php';

		$con=new Conexion($server,$username,$password,$bd);
		$con->conectar();
		$resultado=$con->consultar_gestionar_plataforma();

		$array_nombre_input[1]="codigo_plataforma";
		$array_nombre_input[2]="descripcion_plataforma";
		$array_nombre_input[3]="nombre_plataforma";
		

		$datos="<tr>
					<td>C&oacute;digo</td>	
					<td>Descripci&oacute;n</td>
					<td>Plataforma</td>				
				</tr>";

		$numero_columnas=mysqli_num_fields($resultado);
		$numero_filas=mysqli_num_rows($resultado);

		while($fila=$resultado->fetch_row()){
			$datos.="<tr>";
			for ($i=1;$i<$numero_columnas;$i++){
				$datos.="<td><input class='in_gestion_clientes' id='".$array_nombre_input[$i]."_".$fila[0]."' value='".$fila[$i]."'/></td>";
			}
			$datos.="<td>
						<button ><span class='icon-floppy-disk btn_editar_plataforma' id='btn_editar_plataforma_".$fila[0]."'></span></button>
						<button ><span class='icon-cross btn_eliminar_plataforma' id='btn_eliminar_plataforma_".$fila[0]."'></span></button>
					</td>";
			$datos.="</tr>";
		}

		echo $datos;

	}
?>