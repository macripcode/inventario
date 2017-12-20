$(document).on('ready', function(){

				

				//---------filtro de pedidos ---------------------->
				$('#btn_buscar_filtro').on('click', function(e){
					e.preventDefault();
					var filtro = $( '#seleccion_filtro' ).val();
					var patron=$('#patron_filtro').val();
					

					$.ajax({
							url:'procesar_filtro.php',
							type:'POST',													
							data:{'filtro': filtro,
								  'patron':patron
								},
							success: function(res){	
								$('#tbody').html(res);
								/*----------llamando funciones Autocomplete------------->*/
								//funcion autocompletar estado
								$('.buscar_estado').autocomplete({
									source: 'autocompletar_estado.php', 
									select: function(event, ui){
										cambio_estado();
									}					
								});

								$('.boton_eliminar').on('click', function(){
									var id_input=$(this).attr('id');
									var fila =id_input.substr(15,(id_input.length-1));

									$.ajax({
												url:'procesar_boton_eliminar.php',
												type:'POST',							
												data:{'codigo': fila},
												success: function(res){
													alert(res);																				
												}											

											});				

								});



								$('.boton_guardar').on('click', function(){
										var id_input=$(this).attr('id');
										var fila =id_input.substr(14,(id_input.length-1));				
										
										var estado=$('#buscar_estado_'+fila).val();
										var cliente=$('#buscar_cliente_'+fila).val();
										var codigo_plataforma=$('#buscar_codigo_'+fila).val();
										var descripcion=$('#buscar_descripcion_'+fila).val();
										var material=$('#buscar_material_'+fila).val();
										var color=$('#buscar_color_'+fila).val();
										var plataforma=$('#buscar_plataforma_'+fila).val();
										var sello=$('#buscar_sello_'+fila).val();				
										var empaque=$('#buscar_empaque_'+fila).val();
										var talla_34=$('#talla34_'+fila).val();
										var talla_35=$('#talla35_'+fila).val();
										var talla_36=$('#talla36_'+fila).val();
										var talla_37=$('#talla37_'+fila).val();
										var talla_38=$('#talla38_'+fila).val();
										var talla_39=$('#talla39_'+fila).val();
										var talla_40=$('#talla40_'+fila).val();
										var total=$('#total_'+fila).val();
										var entrega=$('#entrega_'+fila).val();

										$.ajax({
												url:'procesar_boton_guardar.php',
												type:'POST',							
												data:{
													'codigo': fila,
													'estado': estado,
													'cliente': cliente,
													'codigo_plataforma': codigo_plataforma,
													'descripcion': descripcion,
													'material': material,
													'color': color,
													'plataforma': plataforma,
													'sello': sello,
													'empaque': empaque,
													'talla_34': talla_34,
													'talla_35': talla_35,
													'talla_36': talla_36,
													'talla_37': talla_37,
													'talla_38': talla_38,
													'talla_39': talla_39,
													'talla_40': talla_40,
													'total': total,
													'entrega': entrega
											},
												success: function(res){
													alert(res);
																				
												}											

											});

				});



				//guardar pedido		
				
				$('#boton_guardar_0').on('click', function(e){	

					e.preventDefault();

					var nuevo_estado=$('#buscar_estado_0').val();
					var nuevo_cliente=$('#buscar_cliente_0').val();
					var nuevo_codigo=$('#buscar_codigo_0').val();
					var nuevo_descripcion=$('#buscar_descripcion_0').val();
					var nuevo_material=$('#buscar_material_0').val();
					var nuevo_color=$('#buscar_color_0').val();
					var nuevo_plataforma=$('#buscar_plataforma_0').val();
					var nuevo_sello=$('#buscar_sello_0').val();				
					var nuevo_empaque=$('#buscar_empaque_0').val();
					var nuevo_talla_34=$('#talla34_0').val();
					var nuevo_talla_35=$('#talla35_0').val();
					var nuevo_talla_36=$('#talla36_0').val();
					var nuevo_talla_37=$('#talla37_0').val();
					var nuevo_talla_38=$('#talla38_0').val();
					var nuevo_talla_39=$('#talla39_0').val();
					var nuevo_talla_40=$('#talla40_0').val();
					var nuevo_total=$('#total_0').val();
					var nuevo_entrega=$('#entrega_0').val();

					if(nuevo_entrega==""){
						nuevo_entrega='0000-00-00';
					}

					$.ajax({
							url:'procesar_guardar_nuevo_pedido.php',
							type:'POST',							
							data:{	'nuevo_estado': nuevo_estado,
									'nuevo_cliente':nuevo_cliente,
									'nuevo_codigo':nuevo_codigo,
									'nuevo_descripcion':nuevo_descripcion ,
									'nuevo_material': nuevo_material,
									'nuevo_color': nuevo_color,
									'nuevo_plataforma': nuevo_plataforma,
									'nuevo_sello': nuevo_sello,
									'nuevo_empaque': nuevo_empaque,
									'nuevo_talla_34': nuevo_talla_34,
									'nuevo_talla_35': nuevo_talla_35,
									'nuevo_talla_36': nuevo_talla_36,
									'nuevo_talla_37': nuevo_talla_37,
									'nuevo_talla_38': nuevo_talla_38,
									'nuevo_talla_39': nuevo_talla_39,
									'nuevo_talla_40': nuevo_talla_40,
									'nuevo_total': nuevo_total,
									'nuevo_entrega': nuevo_entrega
						         },
							success: function(res){
								alert(res);
								 							
																							
							}											

						});
					

				});

								$('.buscar_estado').change( function(){ 					
									cambio_estado();							
								});
								$( '.buscar_estado' ).blur( function(){					
									cambio_estado();
								});
								
								//funcion autocompletar cliente
								$('.buscar_cliente').autocomplete({
									source: 'autocompletar_cliente.php',
									select: function(event, ui){
										cambio_cliente();
								    }
								 });

								$( '.buscar_cliente' ).blur( function(){					
									cambio_cliente();
								});	       

								$('.buscar_cliente').change( function(){
									cambio_cliente(); 
								});

								//Funcion autocompletar codigo
								$('.buscar_codigo').change( function(){ 
									cambio_codigo_plataforma(); 
								});
								
								$('.buscar_codigo').autocomplete({
									source: 'autocompletar_codigo.php',
									select: function(event, ui){
										cambio_codigo_plataforma();
									}				
								});

								$( '.buscar_codigo' ).blur( function(){					
									cambio_codigo_plataforma();
								});

								//funcion autocompletar descripcion

								$('.buscar_descripcion').change( function(){ 
									cambio_descripcion(); 
								});

								$('.buscar_descripcion').autocomplete({
									source: 'autocompletar_descripcion.php',
									select: function(event, ui){
										cambio_descripcion(); 					 				
									}
								});

								$( '.buscar_descripcion' ).blur( function(){					
									cambio_descripcion();
								});			

								//funcion autocompletar material

								$('.buscar_material').autocomplete({
									source: 'autocompletar_material.php',
									select: function(event, ui){
										cambio_material();
									}				
								});

								$('.buscar_material').change( function(){ 
									cambio_material();
								});

								$( '.buscar_material' ).blur( function(){					
									cambio_material();
								});				

								//funcion autocompletar color

								$('.buscar_color').autocomplete({
									source: 'autocompletar_color.php',
									select: function(event, ui){
										cambio_color();
									}					
								});

								$('.buscar_color').change( function(){ 
									cambio_color();
								});

								$( '.buscar_material' ).blur( function(){					
									cambio_color();
								});	

								//editar tallar , calcular total 

								$('.tallas').change( function() {  
				    				var id_input=event.target.id;
				    				var cantidad=$('#'+id_input).val(); 
				    				var fila =id_input.substr(8,(id_input.length-1)); 
				    				var talla=id_input.substr(5,2);
				    				console.log(talla);   				
				    				var inputs_tallas = new Array("#talla34_"+fila, 
				    											  "#talla35_"+fila, 
				    											  "#talla36_"+fila,
				    											  "#talla37_"+fila,
				    											  "#talla38_"+fila,
				    											  "#talla39_"+fila,
				    											  "#talla40_"+fila);

				    				var suma=parseInt($(inputs_tallas[0]).val())+
				    					     parseInt($(inputs_tallas[1]).val())+
				    					     parseInt($(inputs_tallas[2]).val())+
				    					     parseInt($(inputs_tallas[3]).val())+
				    					     parseInt($(inputs_tallas[4]).val())+
				    					     parseInt($(inputs_tallas[5]).val())+
				    					     parseInt($(inputs_tallas[6]).val());

				    				var input_total="#total_"+fila;

				    				$(input_total).val(suma); 

				    				$.ajax({
										url:'procesar_cambio_talla.php',
										type:'POST',							
										data:{	'codigo': fila,
												'talla': talla,
												'cantidad': cantidad,
												'total':suma																			
									    }
									});   				
								});
								/*----------llamando funciones Autocomplete------------->*/
																																			
							}						

					});	
					
				});

				//---------filtro de pedidos ---------------------->

				//---------botones crud plataforma----------------->
				$('#btn_ingresar_plataforma').on('click', function(){
					$('#form_nuevo_plataforma').css("display","block");
				});
				
				$('#btn_gestionar_cerrar_form_plataforma').on('click', function(){
					$('#form_nuevo_plataforma').css("display","none");
				});

				$('#btn_atras_plataforma').on('click', function(){
					window.location.href = "formulario_ingreso.php";
				});

				$('#btn_gestionar_nuevo_plataforma').on('click', function(e){
					e.preventDefault();

					var codigo_plataforma=$('#input_nuevo_plataforma_codigo').val();
					var descripcion_plataforma=$('#input_nuevo_plataforma_descripcion').val();
					var nombre_plataforma=$('#input_nuevo_plataforma_nombre').val();					

					$.ajax({
							url:'gestionar_nuevo_plataforma.php',
							type:'POST',													
							data:{'codigo_plataforma': codigo_plataforma,
								  'descripcion_plataforma':descripcion_plataforma,
								  'nombre_plataforma': nombre_plataforma
								},
							success: function(res){	
								alert(res);																												
							}						

					});	


				});

				$('.btn_editar_plataforma').on('click', function(){
					
					var id_input=event.target.id; 
					var fila =id_input.substr(22,(id_input.length-1));										

					var codigo_plataforma=$('#codigo_plataforma_'+fila).val();
					var descripcion_plataforma=$('#descripcion_plataforma_'+fila).val();
					var nombre_plataforma=$('#nombre_plataforma_'+fila).val();					
					
					$.ajax({
							url:'gestionar_editar_plataforma.php',
							type:'POST',													
							data:{'codigo_pk': fila,
								  'codigo_plataforma':codigo_plataforma,							     
								  'descripcion_plataforma': descripcion_plataforma,
								  'nombre_plataforma': nombre_plataforma
						         },
							success: function(res){	
								alert(res);													
							}											

						});

				});

				

				$('.btn_eliminar_plataforma').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(24,(id_input.length-1));													
					
					$.ajax({
							url:'gestionar_eliminar_plataforma.php',
							type:'POST',													
							data:{'codigo_pk': fila},
							success: function(res){	
								alert(res);													
							}											

						});				
					
				});	
				
				//---------botones crud plataforma----------------->

				//---------botones crud material----------------->
				
				$('#btn_ingresar_material').on('click', function(){
					$('#form_nuevo_material').css("display","block");
				});
				
				$('#btn_gestionar_cerrar_form_material').on('click', function(){
					$('#form_nuevo_material').css("display","none");
				});

				$('#btn-atras-material').on('click', function(){
					window.location.href = "formulario_ingreso.php";
				});				

				$('#btn_gestionar_nuevo_material').on('click', function(e){
					e.preventDefault();

					var codigo_material=$('#input_nuevo_material_codigo').val();
					var descripcion_material=$('#input_nuevo_material_nombre').val();					

					$.ajax({
							url:'gestionar_nuevo_material.php',
							type:'POST',													
							data:{'codigo_material': codigo_material,
								  'descripcion_material': descripcion_material
								},
							success: function(res){	
								alert(res);																												
							}						

					});	


				});				

				$('.btn_editar_material').on('click', function(){
					
					var id_input=event.target.id; 
					var fila =id_input.substr(20,(id_input.length-1));					

					var codigo_material=$('#codigo_material_'+fila).val();
					var descripcion_material=$('#descripcion_material_'+fila).val();
					

					$.ajax({
							url:'gestionar_editar_material.php',
							type:'POST',													
							data:{'codigo_pk': fila,
								  'codigo_material':codigo_material,							     
								  'descripcion_material': descripcion_material
						         },
							success: function(res){	
								alert(res);													
							}											

						});

				});

				$('.btn_eliminar_material').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(22,(id_input.length-1));													
					
					$.ajax({
							url:'gestionar_eliminar_material.php',
							type:'POST',													
							data:{'codigo_pk': fila},
							success: function(res){	
								alert(res);													
							}											

						});				
					
				});

				//---------botones crud material----------------->

					
				//---------botones crud estado----------------->
				
				$('#btn_ingresar_estado').on('click', function(){
					$('#form_nuevo_estado').css("display","block");
				});
				
				$('#btn_gestionar_cerrar_form_estado').on('click', function(){
					$('#form_nuevo_estado').css("display","none");
				});

				$('#btn-atras-estado').on('click', function(){
					window.location.href = "formulario_ingreso.php";
				});				

				$('#btn_gestionar_nuevo_estado').on('click', function(e){
					e.preventDefault();
					
					var descripcion_estado=$('#input_nuevo_estado_desc').val();					

					$.ajax({
							url:'gestionar_nuevo_estado.php',
							type:'POST',													
							data:{'descripcion_estado': descripcion_estado},
							success: function(res){	
								alert(res);																												
							}											

						});	


				});				

				$('.btn_editar_estado').on('click', function(){
					
					var id_input=event.target.id; 
					var fila =id_input.substr(18,(id_input.length-1));
				
					var descripcion_estado=$('#descripcion_estado_'+fila).val();
					

					$.ajax({
							url:'gestionar_editar_estado.php',
							type:'POST',													
							data:{'codigo_pk': fila,							     
								  'descripcion_estado': descripcion_estado
						         },

							success: function(res){	
								alert(res);													
							}											

						});

				});

				$('.btn_eliminar_estado').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(20,(id_input.length-1));	
								
					
					$.ajax({
							url:'gestionar_eliminar_estado.php',
							type:'POST',													
							data:{'codigo_pk': fila},
							success: function(res){	
								alert(res);													
							}											

						});				
					
				});

				//---------botones crud estado----------------->
				//---------botones crud color----------------->
				$('#btn_gestionar_cerrar_form_color').on('click', function(){
					$('#form_nuevo_cliente').css("display","none");
				});

				$('#btn_ingresar_color').on('click', function(){
					$('#form_nuevo_color').css("display","block");
				});

				$('#btn-atras-color').on('click', function(){
					window.location.href = "formulario_ingreso.php";
				});	

				$('#btn_gestionar_nuevo_color').on('click', function(e){
					e.preventDefault();

					var codigo_color=$('#input_nuevo_color_codigo').val();
					var descripcion_color=$('#input_nuevo_color_desc').val();					

					$.ajax({
							url:'gestionar_nuevo_color.php',
							type:'POST',													
							data:{'codigo_color': codigo_color,
						          'descripcion_color': descripcion_color
						     },
							success: function(res){	
								alert(res);																												
							}											

						});	


				});

				
				$('.btn_editar_color').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(17,(id_input.length-1));

					var codigo_color=$('#codigo_color_'+fila).val();
					var descripcion_color=$('#descripcion_color_'+fila).val();
					

					$.ajax({
							url:'gestionar_editar_color.php',
							type:'POST',													
							data:{'codigo_pk': fila,
							      'codigo_color': codigo_color,
								  'descripcion_color': descripcion_color
						         },

							success: function(res){	
								alert(res);													
							}											

						});					
					
				});

				$('.btn_eliminar_color').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(19,(id_input.length-1));				
					

					$.ajax({
							url:'gestionar_eliminar_color.php',
							type:'POST',													
							data:{'codigo_pk': fila},
							success: function(res){	
								alert(res);													
							}											

						});					
					
				});

				//---------botones crud color----------------->

				//---------botones crud clientes----------------->

				
				$('#btn_ingresar_cliente').on('click', function(){
					$('#form_nuevo_cliente').css("display","block");
				});

				$('#btn_gestionar_cerrar_form').on('click', function(){
					$('#form_nuevo_cliente').css("display","none");
				});

				$('#btn-atras-cliente').on('click', function(){
					window.location.href = "formulario_ingreso.php";
				})


				$('#btn_gestionar_nuevo_cliente').on('click', function(){
					var nombre_cliente=$('#input_nuevo_cliente_nombre').val();
					var sello_cliente=$('#input_nuevo_cliente_sello').val();
					var empaque_cliente=$('#input_nuevo_cliente_empaque').val();

					$.ajax({
							url:'gestionar_nuevo_cliente.php',
							type:'POST',													
							data:{'nombre_cliente': nombre_cliente,
						          'sello_cliente': sello_cliente,
						          'empaque_cliente':empaque_cliente},
							success: function(res){	
								alert(res);																												
							}											

						});	


				});

				$('.btn_editar_cliente').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(19,(id_input.length-1));

					var nombre_cliente=$('#nombre_cliente_'+fila).val();
					var sello_cliente=$('#sello_cliente_'+fila).val();
					var empaque_cliente=$('#empaque_cliente_'+fila).val();

					$.ajax({
							url:'gestionar_editar_cliente.php',
							type:'POST',													
							data:{'codigo_cliente': fila,
								  'nombre_cliente': nombre_cliente,
						          'sello_cliente': sello_cliente,
						          'empaque_cliente':empaque_cliente},

							success: function(res){	
								alert(res);													
							}											

						});					
					
				});

				$('.btn_eliminar_cliente').on('click', function(){
					var id_input=event.target.id; 
					var fila =id_input.substr(21,(id_input.length-1));

					$.ajax({
							url:'gestionar_eliminar_cliente.php',
							type:'POST',													
							data:{'codigo_cliente': fila},
							success: function(res){	
								alert(res);																				
							}											

						});


					
					
				});

				//---------botones crud clientes----------------->

				//---------botones formulario ingreso------------>

				$('#boton_pedido').on('click', function(){
					window.location.href = "formulario_pedidos.php";
				});

				$('#boton_cliente').on('click', function(){
					window.location.href = "formulario_gestionar_clientes.php";
				});

				$('#boton_color').on('click', function(){
					window.location.href = "formulario_gestionar_color.php";
				});

				$('#boton_estado').on('click', function(){
					window.location.href = "formulario_gestionar_estado.php";
				});

				$('#boton_material').on('click', function(){
					window.location.href = "formulario_gestionar_material.php";
				});

				$('#boton_plataforma').on('click', function(){
					window.location.href = "formulario_gestionar_plataforma.php";					
				});

				$('#boton_pedidos_atras').on('click', function(){
					window.location.href = "formulario_ingreso.php";					
				});		



				//----------------------------------------------->



				//cambia el estado a de T a T3 y cuando es OK modifica la fecha de entrega
				function cambio_estado(){

					var id_input=event.target.id;					
    				var fila =id_input.substr(14,(id_input.length-1)); 
					var identificador_estado='#'+id_input;
					var identificador_entrega='#entrega_'+fila;
					var nuevo_valor=$(identificador_estado).val();
					var valor_entrega='0000-00-00';
				   				
    				
					if($(identificador_estado).val()== 'OK'){
						var valor_entrega=$.datepicker.formatDate('yy-mm-dd', new Date());												
					}

					$(identificador_entrega).val(valor_entrega);
					
					$.ajax({
							url:'procesar_cambio_estado.php',
							type:'POST',							
							data:{	'codigo': fila,
									'estado':nuevo_valor,
									'entrega':valor_entrega 									
						         }
					});

				}

				function cambio_cliente(){

					var id_input=event.target.id; 
					var fila =id_input.substr(15,(id_input.length-1)); 
					var cliente=$('#'+event.target.id).val(); 

					var id_sello="#buscar_sello_"+fila;
					var id_empaque='#buscar_empaque_'+fila;


    					$.ajax({
							url:'procesar_autocompletar_cliente.php',
							type:'POST',
							dataType: "json",
							data:{'cliente': cliente},
							success: function(res){
								var sello=res.sello;
								var empaque=res.empaque;
								$(id_sello).val(sello);
								$(id_empaque).val(empaque);	
								$.ajax({
									url:'procesar_cambio_cliente.php',
									type:'POST',							
									data:{	'codigo': fila,
											'cliente':cliente,
											'sello':sello, 
											'empaque':empaque 									
								    }
								});
															
							}											

						}); 

				}

				function cambio_codigo_plataforma(){					

					var id_input=event.target.id;					
					var fila =id_input.substr(14,(id_input.length-1));					
					var codigo_plataforma=$('#'+event.target.id).val();
					var id_descripcion="#buscar_descripcion_"+fila;					
					var id_plataforma='#buscar_plataforma_'+fila;					

					$.ajax({
						url:'procesar_autocompletar_codigo_plataforma.php',
						type:'POST',
						dataType: "json",
						data:{'codigo_plataforma': codigo_plataforma},
						success: function(res){
							var descripcion=res.descripcion;
							var plataforma=res.plataforma;
							$(id_descripcion).val(descripcion);
							$(id_plataforma).val(plataforma);
							$.ajax({
								url:'procesar_cambio_descripcion.php',
								type:'POST',							
								data:{	'codigo': fila,
										'descripcion':descripcion,
										'codigo_plataforma':codigo_plataforma, 
										'plataforma':plataforma 									
							    }
							});							
														
						}											

					}); 
				}

				function cambio_descripcion(){					

					var id_input=event.target.id; 
					var fila =id_input.substr(19,(id_input.length-1)); 
					var descripcion=$('#'+event.target.id).val(); 

					var id_codigo="#buscar_codigo_"+fila;
					var id_plataforma='#buscar_plataforma_'+fila;


					$.ajax({
						url:'procesar_autocompletar_descripcion.php',
						type:'POST',
						dataType: "json",
						data:{'descripcion': descripcion},
						success: function(res){
							var codigo_plataforma=res.codigo;
							var plataforma=res.plataforma;
							$(id_codigo).val(codigo_plataforma);
							$(id_plataforma).val(plataforma);
							$.ajax({
								url:'procesar_cambio_descripcion.php',
								type:'POST',							
								data:{	'codigo': fila,
										'descripcion':descripcion,
										'codigo_plataforma':codigo_plataforma, 
										'plataforma':plataforma 									
							    }
							});							
														
						}											

					}); 
				}

				function cambio_material(){
					var id_input=event.target.id; 
					var fila =id_input.substr(16,(id_input.length-1));
					var material=$('#'+id_input).val();
					

					$.ajax({
						url:'procesar_cambio_material.php',
						type:'POST',							
						data:{	'codigo': fila,
								'material':material																			
					    }
					});						

				}

				function cambio_color(){					
					var id_input=event.target.id; 
					var fila =id_input.substr(13,(id_input.length-1));
					var color=$('#'+id_input).val();					

					$.ajax({
						url:'procesar_cambio_color.php',
						type:'POST',							
						data:{	'codigo': fila,
								'color':color																			
					    }
					});	

				}
					

					
});




			