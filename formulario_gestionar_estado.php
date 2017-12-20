<?php
	include 'header.php';
	include 'procesar_gestionar_estado.php';
?>

	<div class="container">
		<div id="div_nuevo_estado_btn" class="col-md-3">			
			<button class="btn btn-default btn-lg btn-block" id="btn_ingresar_estado"><span class='icon-user-plus' id="span-icono"></span>Ingresar Estado</button>					
		</div>
		<div id="form_nuevo_estado" class="col-md-12">
			<form class="form-inline">
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_estado_desc" placeholder="Estado">
				  </div>				  				  
				  <button class="btn btn-default" id='btn_gestionar_nuevo_estado'><span class='icon-floppy-disk'></span> Guardar Estado </button>
				  <button class="btn btn-default" id='btn_gestionar_cerrar_form_estado'><span class='icon-cross btn_eliminar_cliente'></span> Cerrar </button>
				</form>
			
		</div>				
		

		<div id="div_tabla_clientes">
			<table class="table table-hover">
				<?php echo pedir_estados(); ?>
			</table>
		</div>

		<div id="btn_atras_clientes" class="col-md-3">
			<button class="btn btn-default btn-lg btn-block" id="btn-atras-estado"><span class='icon-redo2' id="span-icono"></span>Atras</button>			
		</div>
		
	</div>

<?php
	include 'footer.php';
?>