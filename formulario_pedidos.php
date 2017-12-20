<?php
	include 'header.php';
?>

	<div class="container">

			<div class="row contenedor-btn">
				<div class="col-md-6" >
					<form class="form-inline">
						 <div class=" form-group">
						    <label>Filtro:</label>
						    <select class="form-control" id="seleccion_filtro">
							  <option value="0">Todos</option>
							  <option value="1">Estado</option>
							  <option value="2">Cliente</option>
							  <option value="3">Codigo</option>
							  <option value="4">Descripción</option>
							  <option value="5">Material</option>
							  <option value="6">Color</option>
							  <option value="7">Plataforma</option>
							  <option value="8">Sello</option>
							  <option value="9">Empaque</option>
							</select>
							<input class="form-control" id="patron_filtro" >						
						 </div>
						 <div class="form-group">
						 	<button id="btn_buscar_filtro" class="btn btn-default" >Buscar</button>
						 </div>
						
					</form>					
				</div>

				<div  class="col-md-2 col-md-offset-4 ">
					<button id="boton_pedidos_atras" class="btn btn-default btn-block"><span class="icon-undo2" id="span-icono"></span>Atras</button>
				</div>				
			</div>			
	</div>

	<div id="table_wrapper">

		<div>
			<div id="head1_cabecera" class="letra_head">E<br>S<br>T<br>A<br>D<br>O</div>			   
			<div id="head2_cabecera" class="letra_head">CLIENTE</div>			
			<div id="head3_cabecera" class="letra_head">CODIGO</div>			
			<div id="head4_cabecera" class="letra_head">DESCRIPCION</div>			
			<div id="head5_cabecera" class="letra_head">MATERIAL</div>		
			<div id="head6_cabecera" class="letra_head">COLOR</div>			
			<div id="head7_cabecera" class="letra_head">PLATAFORMA</div>			
			<div id="head8_cabecera" class="letra_head">SELLO</div>			
			<div id="head9_cabecera" class="letra_head">EMPAQUE</div>			
			<div id="head10_cabecera" class="letra_head">34</div>			
			<div id="head11_cabecera" class="letra_head">35</div>			
			<div id="head12_cabecera" class="letra_head">36</div>			
			<div id="head13_cabecera" class="letra_head">37</div>			
			<div id="head14_cabecera" class="letra_head">38</div>		
			<div id="head15_cabecera" class="letra_head">39</div>			
			<div id="head16_cabecera" class="letra_head">40</div>
			<div id="head17_cabecera" class="letra_head">T<br>O<br>T<br>A<br>L</div>				
			<div id="head18_cabecera" class="letra_head">ENTREGA</div>
		</div>							
			
		<div id="tbody">			
		</div>				
			
	</div>

	
		
	
	
	

<?php
	include 'footer.php';
?>