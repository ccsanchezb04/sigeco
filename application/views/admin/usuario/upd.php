<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Admin" type='button' class='btn btn-sm btn-danger pull-right'>
					Atras&nbsp;<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

				<div class="panel panel-default">   
        			<div class="panel-heading"><h3 class="text-warning">Modificar datos del usuario</h3></div>				
					<div id="frm_register">
					<?php foreach ($lstu as $key): ?>
						<form class="form-horizontal" role="form" method="post">  
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" name="id" placeholder="DOCUMENTO DE IDENTIDAD" value="<?php echo $key->no_identificacion; ?>">
						    	</div>					    	
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" id="nombre" name="nombres" placeholder="NOMBRES" value="<?php echo $key->nombres; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" id="apellido" name="apellidos" placeholder="APELLIDOS" value="<?php echo $key->apellidos; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="password" class="form-control" name="password" placeholder="CONTRASEÑA" value="<?php echo $key->password; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" id="direccion" name="direccion" placeholder="DIRECCIÓN RESIDENCIA" value="<?php echo $key->direccion; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" name="telfijo" placeholder="TELEOFNO FIJO" value="<?php echo $key->tel_fijo; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="text" class="form-control" name="telmovil" placeholder="TELEFONO MOVIL" value="<?php echo $key->tel_fijo; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<input type="mail" class="form-control" name="correo" placeholder="CORREO ELECTRONICO" value="<?php echo $key->correo_electronico; ?>">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<select name="estado" class="form-control">
					                    <option value="">SELECCIONE ESTADO...</option>
					                    <option value="ACTIVO" <?php if ($key->estado == "ACTIVO") echo "selected=''selected"; ?>>ACTIVO</option>
					                    <option value="INACTIVO" <?php if ($key->estado == "INACTIVO") echo "selected=''selected"; ?>>INACTIVO</option>
					                </select>
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-10">
						      		<select name="rol" class="form-control">
					                    <option value="">SELECCIONE ROL...</option>
					                    <option value="ADMIN" <?php if ($key->rol == "ADMIN") echo "selected=''selected"; ?>>ADMIN</option>
					                    <option value="EMPLEADO" <?php if ($key->rol == "EMPLEADO") echo "selected=''selected"; ?>>EMPLEADO</option>
					                    <option value="PROFESOR" <?php if ($key->rol == "PROFESOR") echo "selected=''selected"; ?>>PROFESOR</option><input type="hidden" name="am_codigo" value="0">
					                </select>
						    	</div>
						  	</div>				
						  	<div class="form-group">
						    	<div class="col-lg-6">
						      		<button type="submit" class="btn btn-warning">
						      			Modificar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
						      		</button>
						    	</div>
						  	</div>					  				
						</form>
					<?php endforeach ?>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>