<?php
	include 'header.php';
	include 'procesar_gestionar_material.php';
?>

	<div class="container">
		<div id="div_nuevo_material_btn" class="col-md-3">			
			<button class="btn btn-default btn-lg btn-block" id="btn_ingresar_material"><span class='icon-user-plus' id="span-icono"></span>Ingresar Material</button>					
		</div>
		<div id="form_nuevo_material" class="col-md-12">
			<form class="form-inline">
				<div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_material_codigo" placeholder="Codigo">
				  </div>
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_material_nombre" placeholder="Material">
				  </div>			  
				  				  
				  <button class="btn btn-default"id='btn_gestionar_nuevo_material'><span class='icon-floppy-disk'></span> Guardar Material </button>
				  <button class="btn btn-default"id='btn_gestionar_cerrar_form_material'><span class='icon-cross'></span> Cerrar </button>
				</form>
			
		</div>				
		

		<div id="div_tabla_clientes">
			<table class="table table-hover">
				<?php echo pedir_material(); ?>
					


			</table>
		</div>

		<div id="btn_atras_material" class="col-md-3">
			<button class="btn btn-default btn-lg btn-block" id="btn-atras-material"><span class='icon-redo2' ></span>Atras</button>			
		</div>
		
	</div>

<?php
	include 'footer.php';
?>