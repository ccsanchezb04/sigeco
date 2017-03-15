<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Empleado/asignacion" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Modificar Asignacion Jefe de Grupo</h3>
	        			</div>
						<div id="frm_register">
						<?php foreach ($lsta as $key ): ?>						
								
							<form class="form-horizontal" role="form" method="post">
								<div class="form-group">
							    	<div class="col-lg-10">
							    	  	<input type="hidden" class="form-control" id="id-asig" name="id-grupo" value="<?php echo $key->codigo_asignacion ?>">
							      		<select name="profesor" class="form-control">
						                    <option value="">SELECCIONE PROFESOR...</option>					                   
					                    <?php   
						                    foreach ($lstp as $row) 
							                {
							                    if ($key->no_identificacion == $row->no_identificacion) 
							                    {
							                      echo "<option value='".$row->no_identificacion."' selected='selected'>".$row->nombres." ".$row->apellidos."</option>";
							                    }
							                    else
							                    {
							                       echo "<option value='".$row->no_identificacion."'>".$row->nombres." ".$row->apellidos."</option>";
							                    }
							                } 
						       			?>					               
						                </select>						               
							    	</div>
							  	</div>  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="grupo" class="form-control">
						                    <option value="">SELECCIONE GRUPO...</option>										
					                    <?php   
						                    foreach ($lstg as $row1) 
							                {
							                    if ($key->grupo_codigo == $row1->codigo_grupo) 
							                    {
							                      echo "<option value='".$row1->codigo_grupo."' selected='selected'>".$row1->grupo."</option>";
							                    }
							                    else
							                    {
							                       echo "<option value='".$row1->codigo_grupo."'>".$row1->grupo."</option>";
							                    }
							                } 
						       			?>					               
						                </select>						                
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="materia" class="form-control">
						                    <option value="">SELECCIONE MATERIA...</option>										
					                    <?php   
						                    foreach ($lstm as $row2) 
							                {
							                    if ($key->materia_codigo == $row2->codigo_materia) 
							                    {
							                      echo "<option value='".$row2->codigo_materia."' selected='selected'>".$row2->nombre_materia."</option>";
							                    }
							                    else
							                    {
							                       echo "<option value='".$row2->codigo_materia."'>".$row2->nombre_materia."</option>";
							                    }
							                } 
						       			?>					               
						                </select>						                
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="horario" class="form-control">
						                    <option value="">SELECCIONE HORARIO...</option>										
					                    <?php   
						                    foreach ($lsth as $row3) 
							                {
							                    if ($key->horario_codigo == $row3->codigo_horario) 
							                    {
							                      echo "<option value='".$row3->codigo_horario."' selected='selected'>".$row3->hora_inicio." - ".$row3->hora_fin."</option>";
							                    }
							                    else
							                    {
							                       echo "<option value='".$row3->codigo_horario."'>".$row3->hora_inicio." - ".$row3->hora_fin."</option>";
							                    }
							                } 
						       			?>					               
						                </select>						                
							    	</div>
							  	</div>							  	
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="dia" class="form-control">
						                    <option value="">SELECCIONE DIA...</option>
						                 	<option value="LUNES" <?php if ($key->dia == "LUNES") echo "selected='selected'"; ?>>LUNES</option>
						                 	<option value="MARTES" <?php if ($key->dia == "MARTES") echo "selected='selected'"; ?>>MARTES</option>
						                 	<option value="MIERCOLES" <?php if ($key->dia == "MIERCOLES") echo "selected='selected'"; ?>>MIERCOLES</option>
						                 	<option value="JUEVES" <?php if ($key->dia == "JUEVES") echo "selected='selected'"; ?>>JUEVES</option>
						                 	<option value="VIERNES" <?php if ($key->dia == "VIERNES") echo "selected='selected'"; ?>>VIERNES</option>
						                </select>						                
							    	</div>
							  	</div>							  				
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Modificar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>							      		
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