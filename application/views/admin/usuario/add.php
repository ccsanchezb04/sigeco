<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Admin" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Agregar de datos del usuario</h3>
	        			</div>
						<div id="frm_register">				
							<form class="form-horizontal" role="form" method="post">  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="id" placeholder="DOCUMENTO DE IDENTIDAD" value="<?php echo set_value('id') ?>">
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="nombre" name="nombres" placeholder="NOMBRES" value="<?php echo set_value('nombres') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="apellido" name="apellidos" placeholder="APELLIDOS" value="<?php echo set_value('apellidos') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="password" class="form-control" name="password" placeholder="CONTRASEÑA" value="<?php echo set_value('contraseña') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="direccion" name="direccion" placeholder="DIRECCIÓN RESIDENCIA" value="<?php echo set_value('direccion') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telfijo" placeholder="TELEOFNO FIJO" value="<?php echo set_value('telfijo') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telmovil" placeholder="TELEFONO MOVIL" value="<?php echo set_value('telmovil') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="mail" class="form-control" name="correo" placeholder="CORREO ELECTRONICO" value="<?php echo set_value('correo') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="estado" class="form-control">
						                    <option value="">SELECCIONE ESTADO...</option>
						                    <option value="ACTIVO">ACTIVO</option>
						                    <option value="INACTIVO">INACTIVO</option>
						                </select>
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="rol" class="form-control">
						                    <option value="">SELECCIONE ROL...</option>
						                    <option value="ADMIN">ADMIN</option>
						                    <option value="EMPLEADO">EMPLEADO</option>
						                    <option value="PROFESOR">PROFESOR</option><input type="hidden" name="am_codigo" value="0">
						                </select>
							    	</div>
							  	</div>				
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Registrar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
							      		<button type="reset" class="btn btn-add">Limpiar Formulario&nbsp;<span class="glyphicon glyphicon-minus"></span></button>
							    	</div>
							  	</div>					  				
							</form>
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>