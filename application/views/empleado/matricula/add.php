<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Empleado/matricula" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Agregar Matricula</h3>
	        			</div>
						<div id="frm_register">				
							<form class="form-horizontal" role="form" method="post">
							<?php foreach ($lsti as $key): ?>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" name="id" placeholder="DOCUMENTO DE IDENTIDAD" value="<?php echo $key->no_identificacion; ?>">
							      		<input type="hidden" class="form-control" name="id-insc" value="<?php echo $key->codigo_inscripcion; ?>">							      		
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="grupo" class="form-control">
							      			<?php foreach ($lstg as $key): ?>
							      				<option value="<?php echo $key->grupo; ?>" <?php if ($key->grupo=="$key->grupo") echo "select='select'" ?> ><?php echo $key->grupo; ?></option>
							      			<?php endforeach ?>
							      		</select>							      		
							    	</div>					    	
							  	</div>
							<?php endforeach ?>  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="date" class="form-control" name="fecha-matricula" placeholder="FECHA MATRICULA" value="<?php echo date('Y-m-d'); ?>">							      		
							      		<input type="hidden" class="form-control" name="id-matricula" value="0">
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="estado" class="form-control">							      			
						      				<option value="">SELECCIONAR ESTADO INSTITUCIONAL</option>
						      				<option value="MATRICULADO">MATRICULADO</option>
						      				<option value="NO-MATRICULADO">NO-MATRICULADO</option>
						      				<option value="INSCRITO">INSCRITO</option>							      			
							      		</select>
							    	</div>					    	
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Matriular&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
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