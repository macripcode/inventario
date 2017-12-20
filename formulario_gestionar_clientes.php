<?php
	include 'header.php';
	include 'procesar_gestionar_clientes.php';
?>

	<div class="container">
		<div id="div_nuevo_cliente_btn" class="col-md-3">			
			<button class="btn btn-default btn-lg btn-block" id="btn_ingresar_cliente"><span class='icon-user-plus' id="span-icono"></span>Ingresar Cliente</button>					
		</div>
		<div id="form_nuevo_cliente" class="col-md-12">
			<form class="form-inline">
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_cliente_nombre" placeholder="Cliente">
				  </div>
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_cliente_sello" placeholder="Sello">
				  </div>
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_cliente_empaque" placeholder="Empaque">
				  </div>				  
				  <button class="btn btn-default"id='btn_gestionar_nuevo_cliente'><span class='icon-floppy-disk'></span> Guardar Cliente </button>
				  <button class="btn btn-default"id='btn_gestionar_cerrar_form'><span class='icon-cross btn_eliminar_cliente'></span> Cerrar </button>
				</form>
			
		</div>				
		

		<div id="div_tabla_clientes">
			<table class="table table-hover">
				<?php echo pedir_clientes(); ?>
					


			</table>
		</div>

		<div id="btn_atras_clientes" class="col-md-3">
			<button class="btn btn-default btn-lg btn-block" id="btn-atras-cliente"><span class='icon-redo2' id="span-icono"></span>Atras</button>			
		</div>
		
	</div>

<?php
	include 'footer.php';
?>