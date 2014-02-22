<?php echo validation_errors(); ?>

<body>
	<div class="row" id="inscripcion">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="contenedor">
				<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Inscripcion de estudiantes</h3>
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
							      		<input type="password" class="form-control" name="password" placeholder="CONTRASEÑA" value="<?php echo set_value('password') ?>">
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
								<hr>
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
							  	<div class="form-group">
							    	<div class="col-lg-10">
							    		<input type="text" class="form-control" name="nom-acudiente" placeholder="NOMBRES ACUDIENTE" value="<?php echo set_value('nom-acudiente') ?>">
							    		<input type="hidden" class="form-control" name="id-insc" value="0">
							      		<input type="hidden" class="form-control" name="fecha-inscripcion" value="<?php echo date('Y-m-d'); ?>">
							      		<input type="hidden" class="form-control" name="rol" value="ESTUDIANTE">
							      		<input type="hidden" class="form-control" name="estado" value="ACTIVO">
							      		<input type="hidden" class="form-control" name="estado-insc" value="INSCRITO">
							      		<input type="hidden" class="form-control" name="am-codigo" value="0">
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="" name="ape-acudiente" placeholder="APELLIDOS ACUDIENTE" value="<?php echo set_value('ape-acudiente') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="" name="telmovil-acudiente" placeholder="TELEFONO MOVIL ACUDIENTE" value="<?php echo set_value('telmovil-acudiente') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="mail" class="form-control" name="correo-acudiente" placeholder="CORREO ELECTRONICO ACUDIENTE" value="<?php echo set_value('correo') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="nom-padre" placeholder="NOMBRES PADRE" value="<?php echo set_value('nom-padre') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="ape-padre" placeholder="APELLIDOS PADRE" value="<?php echo set_value('ape-padre') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telmovil-padre" placeholder="TELEOFNO MOVIL PADRE" value="<?php echo set_value('telmovil-padre') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="nom-madre" placeholder="NOMBRES MADRE" value="<?php echo set_value('nom-madre') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="ape-madre" placeholder="APELLIDOS MADRE" value="<?php echo set_value('ape-madre') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="telmovil-madre" placeholder="TELEFONO MOVIL MADRE" value="<?php echo set_value('telmovil-madre') ?>">
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
		<div class="col-md-2"></div>
	</div>