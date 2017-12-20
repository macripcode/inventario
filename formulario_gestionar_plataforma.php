<?php
	include 'header.php';
	include 'procesar_gestionar_plataforma.php';
?>

	<div class="container">
		<div id="div_nuevo_plataforma_btn" class="col-md-3">			
			<button class="btn btn-default btn-lg btn-block" id="btn_ingresar_plataforma"><span class='icon-user-plus' id="span-icono"></span>Ingresar Plataforma</button>					
		</div>
		<div id="form_nuevo_plataforma" class="col-md-12">
			<form class="form-inline">
				 <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_plataforma_codigo" placeholder="C&oacute;digo">
				  </div>
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_plataforma_descripcion" placeholder="Descripci&oacute;n">
				  </div>	
				  <div class="form-group">				    
				    <input type="text" class="form-control" id="input_nuevo_plataforma_nombre" placeholder="Plataforma">
				  </div>			  
				  				  
				  <button class="btn btn-default"id='btn_gestionar_nuevo_plataforma'><span class='icon-floppy-disk'></span> Guardar Plataforma </button>
				  <button class="btn btn-default"id='btn_gestionar_cerrar_form_plataforma'><span class='icon-cross'></span> Cerrar </button>
			</form>
			
		</div>				
		

		<div id="div_tabla_clientes">
			<table class="table table-hover">
				<?php echo pedir_plataforma(); ?>
			</table>
		</div>

		<div id="btn_atras_plataforma" class="col-md-3">
			<button class="btn btn-default btn-lg btn-block" id="btn-atras-plataforma"><span class='icon-redo2' ></span>Atras</button>			
		</div>
		
	</div>

<?php
	include 'footer.php';
?>