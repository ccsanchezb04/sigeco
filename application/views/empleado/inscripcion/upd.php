<?php echo validation_errors(); ?>

<body>
	<div class="row" id="inscripcion">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="contenedor">
				<a href="<?php echo base_url(); ?>Empleado" type='button' class='btn btn-sm btn-danger pull-right'>
					Atras&nbsp;<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Modificar Inscripcion</h3>
	        			</div>
						<div id="frm_register">				
							<form class="form-horizontal" role="form" method="post">  
								<h4 class="text-warning text-center">Datos Estudiante</h4>
							<?php foreach ($lstu as $key): ?>
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
							      		<input type="text" class="form-control" name="telmovil" placeholder="TELEFONO MOVIL" value="<?php echo $key->tel_movil; ?>">
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
							<?php endforeach ?>

								<hr>
								<h4 class="text-warning text-center">Datos Inscripcion</h4>
														
								<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="grupo" class="form-control">
							      			<option value="">SELECCIONE GRUPO...</option>
						                <?php foreach ($lstg as $key): ?>
						                	<option value="<?php echo $key->grupo ?>"><?php echo $key->grupo ?></option>
										<?php endforeach ?>
						                </select>
							    	</div>
							  	</div>
							<?php foreach ($lsti as $key): ?>  	
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="date" class="form-control" name="fecha-inscripcion" value="<?php echo $key->fecha_inscripcion; ?>">
							    	</div>
							  	</div>
														  	
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="estado-insc" class="form-control">
							      			<option value="">SELECCIONE ESTADO INSTITUCIONAL...</option>						                
						                	<option value="INSCRITO" <?php if ($key->estado == "INSCRITO") echo "selected=''selected"; ?>>INSCRITO</option>
						                	<option value="NO-INSCRITO" <?php if ($key->estado == "NO-INSCRITO") echo "selected=''selected"; ?>>NO INSCRITO</option>										
						                </select>
						                <input type="hidden" class="form-control" name="id-insc" value="<?php echo $key->codigo_inscripcion; ?>">
							    	</div>
							  	</div>
							<?php endforeach ?>

							<?php foreach ($lstu as $key): ?>
							  	<hr>
								<h4 class="text-warning text-center">Datos Acudiente</h4>								
							  	<div class="form-group">
							    	<div class="col-lg-10">
							    		<input type="text" class="form-control" name="nom-acudiente" placeholder="NOMBRES ACUDIENTE" value="<?php echo $key->nombres_acudiente; ?>">							    									      		
							      		<input type="hidden" class="form-control" name="rol" value="<?php echo $key->rol; ?>">							      									      		
							      		<input type="hidden" class="form-control" name="am_codigo" value="<?php echo $key->am_codigo; ?>">
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="" name="ape-acudiente" placeholder="APELLIDOS ACUDIENTE" value="<?php echo $key->apellidos_acudiente; ?>">
							    	</div>
							  	</div>							  	
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="" name="telmovil-acudiente" placeholder="TELEFONO MOVIL ACUDIENTE" value="<?php echo $key->tel_movil_acudiente; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="mail" class="form-control" name="correo-acudiente" placeholder="CORREO ELECTRONICO ACUDIENTE" value="<?php echo $key->correo_acudiente; ?>">
							    	</div>
							  	</div>

							  	<hr>
								<h4 class="text-warning text-center">Datos Padre y Madre</h4>

							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="nom-padre" placeholder="NOMBRES PADRE" value="<?php echo $key->nombres_padre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="ape-padre" placeholder="APELLIDOS PADRE" value="<?php echo $key->apellidos_padre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telmovil-padre" placeholder="TELEOFNO MOVIL PADRE" value="<?php echo $key->tel_movil_padre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="nom-madre" placeholder="NOMBRES MADRE" value="<?php echo $key->nombres_madre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="ape-madre" placeholder="APELLIDOS MADRE" value="<?php echo $key->apellidos_madre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telmovil-madre" placeholder="TELEFONO MOVIL MADRE" value="<?php echo $key->tel_movil_madre; ?>">
							    	</div>
							  	</div>
							<?php endforeach ?>
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Modificar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>							      		
							    	</div>
							  	</div>												  				
							</form>
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>