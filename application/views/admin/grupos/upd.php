<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Admin/grupo" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Modificar Grupo</h3>
	        			</div>
						<div id="frm_register">
						<?php foreach ($lstg as $key): ?>				
							<form class="form-horizontal" role="form" method="post">								
								<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="nivel" class="form-control">
						                    <option value="">SELECCIONE NIVEL...</option>
						                    <option value="PRIMARIA" <?php if ($key->nivel == "PRIMARIA") echo "selected='selected'"; ?>>PRIMARIA</option>
						                    <option value="SECUNDARIA" <?php if ($key->nivel == "SECUNDARIA") echo "selected='selected'"; ?>>SECUNDARIA</option>
						                    <option value="MEDIA" <?php if ($key->nivel == "MEDIA") echo "selected='selected'"; ?>>MEDIA</option>
						                </select>
						                <input type="hidden" class="form-control" id="id-grupo" name="id-grupo" value="<?php echo $key->codigo_grupo; ?>">
							    	</div>
							  	</div>
								<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="grupo" name="grupo" placeholder="NOMBRE DE GRUPO" value="<?php echo $key->grupo; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
								  	<div class="col-lg-10">
							      		<select name="nombre" class="form-control">
						                    <option value="">SELECCIONE NOMBRE...</option>
						                    <option value="PRIMERO" <?php if ($key->nombre == "PRIMERO") echo "selected='selected'"; ?>>PRIMERO</option>
						                    <option value="SEGUNDO" <?php if ($key->nombre == "SEGUNDO") echo "selected='selected'"; ?>>SEGUNDO</option>
						                    <option value="TERCERO" <?php if ($key->nombre == "TERCERO") echo "selected='selected'"; ?>>TERCERO</option>					                    
						                    <option value="CUARTO" <?php if ($key->nombre == "CUARTO") echo "selected='selected'"; ?>>CUARTO</option>
						                    <option value="QUINTO" <?php if ($key->nombre == "QUINTO") echo "selected='selected'"; ?>>QUINTO</option>
						                    <option value="SEXTO" <?php if ($key->nombre == "SEXTO") echo "selected='selected'"; ?>>SEXTO</option>					                    
						                    <option value="SEPTIMO" <?php if ($key->nombre == "SEPTIMO") echo "selected='selected'"; ?>>SEPTIMO</option>
						                    <option value="OCTAVO" <?php if ($key->nombre == "OCTAVO") echo "selected='selected'"; ?>>OCTAVO</option>
						                    <option value="NOVENO" <?php if ($key->nombre == "NOVENO") echo "selected='selected'"; ?>>NOVENO</option>					                    
						                    <option value="DECIMO" <?php if ($key->nombre == "DECIMO") echo "selected='selected'"; ?>>DECIMO</option>
						                    <option value="UNDECIMO" <?php if ($key->nombre == "UNDECIMO") echo "selected='selected'"; ?>>UNDECIMO</option>					                    
						                </select>
						            </div>						                
						    	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="cupo" name="cupo" placeholder="CUPO" value="<?php echo $key->cupo; ?>">
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