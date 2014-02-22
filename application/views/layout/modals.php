<!-- Modal ingreso/Login -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	      	<div class="modal-content">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          	<h4 class="modal-title">Ingreso de Usuarios</h4>
	        	</div>
		        <div class="modal-body">
					<form class="form-horizontal" role="form" method="post" id="btfrm_login">
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="id" placeholder="No. Idetificacion">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="password" class="form-control" name="password" placeholder="Contraseña">
					    	</div>
					  	</div>			
					  	<div class="form-group">
					    	<div class="col-lg-2 col-lg-10">
					      		<button type="submit" class="btn btn-warning">Ingresar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
					    	</div>
					  	</div>
					</form>
		        </div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        	</div>
	     	</div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	 </div><!-- /.modal -->

<!-- ==================================================================== -->

	<div class="modal fade" id="myModal2" tabindex="-2" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
	    <div class="modal-dialog">
	      	<div class="modal-content">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          	<h4 class="modal-title">Inscripcion de Estudiante</h4>
	        	</div>
		        <div class="modal-body">
					<form class="form-horizontal" role="form" method="post" id="btfrm_register">					  
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="documento" placeholder="Documento de identidad" validate="required|number">
					    	</div>					    	
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="nombres" placeholder="Nombre">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="telefono" placeholder="Telefono">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="direccion" placeholder="Direccion de Residencia">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="password" class="form-control" name="clave" placeholder="Contraseña">
					      	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="correo" placeholder="Correo Electronico">
					    	</div>
					  	</div>						  				
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<button type="submit" class="btn btn-success">Registrar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<button type="reset" class="btn btn-warning">Limpiar Formulario</button>
					    	</div>
					    </div>			
					</form>
		        </div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        	</div>
	     	</div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- ==================================================================== -->
<?php echo validation_errors(); ?>

	<div class="modal fade" id="myModal3" tabindex="-3" role="dialog" aria-labelledby="myModalLabe3" aria-hidden="true">
	    <div class="modal-dialog">
	      	<div class="modal-content">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          	<h4 class="modal-title">Agregar Usuarios</h4>
	        	</div>
		        <div class="modal-body">
					<form class="form-horizontal" role="form" method="post" id="btfrm_register" action="">					  
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="id" placeholder="Documento de identidad" value="<?php echo set_value('id') ?>">
					    	</div>					    	
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="nombres" placeholder="Nombres" value="<?php echo set_value('nombres') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo set_value('apellidos') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php echo set_value('contraseña') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="direccion" placeholder="Direccion de Residencia" value="<?php echo set_value('direccion') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="telfijo" placeholder="Telefono Fijo" value="<?php echo set_value('telfijo') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="text" class="form-control" name="telmovil" placeholder="Telefono Movil" value="<?php echo set_value('telmovil') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<input type="mail" class="form-control" name="correo" placeholder="Correo Electronico" value="<?php echo set_value('correo') ?>">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<select name="estado" class="form-control">
				                    <option value="">Seleccione Estado...</option>
				                    <option value="ACTIVO">ACTIVO</option>
				                    <option value="INACTIVO">INACTIVO</option>
				                </select>
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-10">
					      		<select name="rol" class="form-control">
				                    <option value="">Seleccione Rol...</option>
				                    <option value="ADMIN">ADMIN</option>
				                    <option value="EMPLEADO">EMPLEADO</option>
				                    <option value="PROFESOR">PROFESOR</option>
				                </select>
					    	</div>
					  	</div>						  	
					  	<div class="form-group">
					    	<div class="col-lg-10">					      		
					      		<input type="hidden" name="am_codigo" value="0">					      		
					    	</div>
					  	</div>					  						  							  				
					  	<div class="form-group">
					    	<div class="col-lg-6">
					      		<button type="submit" class="btn btn-success">Registrar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<div class="col-lg-6">
					      		<button type="reset" class="btn btn-warning">Limpiar Formulario</button>
					    	</div>
					    </div>				
					</form>
		        </div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        	</div>
	     	</div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->