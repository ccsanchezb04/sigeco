<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Admin/horario" type='button' class='btn btn-sm btn-danger pull-right'>
					Atras&nbsp;<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Modificar Horario</h3>
	        			</div>
						<div id="frm_register">
						<?php foreach ($h as $key ): ?>									
							<form class="form-horizontal" role="form" method="post">								  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="time" class="form-control" id="" name="hora-inicio" placeholder="HORA INICIO" value="<?php echo $key->hora_inicio; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="time" class="form-control" id="" name="hora-fin" placeholder="HORA FIN" value="<?php echo $key->hora_fin; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="jornada" class="form-control">
						                    <option value="">SELECCIONE JORNADA...</option>
						                    <option value="MANANA" <?php if ($key->jornada == "MANANA") echo "select='select'"; ?>>MAÑANA</option>
						                    <option value="TARDE" <?php if ($key->jornada == "TARDE") echo "select='select'"; ?>>TARDE</option>
						                </select>
						                <input type="hidden" class="form-control" id="id-horario" name="id-horario" value="<?php echo $key->hora_fin; ?>">
							    	</div>
							  	</div>				
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Modificar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
							      		<button type="reset" class="btn btn-add">Limpiar Formulario&nbsp;<span class="glyphicon glyphicon-repeat"></span></button>
							    	</div>
							  	</div>					  				
							</form>
						<?php endforeach ?>	
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>