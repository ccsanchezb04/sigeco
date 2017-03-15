<?php $data['seccion'] = 1; ?>

<body>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div id="cinta1">
				<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/cinta1.png">
			</div>
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

								

				<!-- Tab panels -->
				<div class="tab-content">
					<!-- =================================================== -->
					<!-- ===================== Usuario ===================== -->
					<div class="tab-pane active" id="usuario">

						<div class="top-bar">
							<div class="row">
								<div class="col-md-6">
								<?php foreach ($e as $key): ?>																
									<h3>Estudiate: <?php echo $key->nombres." ".$key->apellidos; ?></h3>
								<?php endforeach ?>
								</div>								
								<div class="col-md-4">
									<form class="navbar-form navbar-right" role="search">
									  	<div class="form-group">
									    	<input type="text" class="form-control" placeholder="Buscar Usuario">
									  	</div>
									  	<button type="submit" class="btn btn-warning">
									  		<span class="glyphicon glyphicon-search	"></span>
									  	</button>
									</form>									
								</div>
								<div class="col-md-2">
									<ul class="nav navbar-nav navbar-right">
										<li>
											<a href="<?php echo base_url(); ?>login/close" class="btn-danger" id="btn-cerrar">
												Cerrar Sesión&nbsp;<span class="glyphicon glyphicon-log-out"></span>
											</a>
										</li>					
									</ul>
								</div>			
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3">							
						
								<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#calif" data-toggle="tab">
								  			Calificaciones&nbsp;<span class="glyphicon glyphicon-th-large"></span>
								  		</a>				  		
								  	</li>
								  	<li>
								  		<a href="#horarios" data-toggle="tab">
								  			Horarios&nbsp;<span class="glyphicon glyphicon-time"></span>
								  		</a>				  		
								  	</li>
								  							  
								</ul>

							</div>
							<div class="col-md-9">
								<!-- Tab panes -->
								<div class="tab-content">
								  	<div class="tab-pane active grupos" id="calif">
								  		<table class="table table-striped">
											<tr>												
												<th>Materia</th>
												<th>Nota 1er Periodo</th>
												<th>Nota 2° Periodo</th>
												<th>Nota 3er Periodo</th>
												<th>Nota 4° Periodo</th>
												<th>Nota Final</th>	
											</tr>							
											<?php foreach ($lca as $key): ?>
											<?php 
												$query1 = "SELECT * 
														   FROM asignaciones
														   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
														   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
														   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
														   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
														   WHERE asignaciones.codigo_asignacion = $key->asignacion_codigo;";
										                   
										        $query = $this->db->query($query1);
										        foreach ($query->result() as $row) 
										        {
										        	$codigo_asignacion = $row->codigo_asignacion;
										        	$grupo_codigo = $row->grupo_codigo;
													$materia = $row->nombre_materia;
										        }
											?>

											<tr>										
												<?php //foreach ($materia as $key): ?>
												<td><?php echo $materia; ?></td>
												<?php //endforeach ?>
												<td><?php echo $key->primer_periodo; ?></td>										
												<td><?php echo $key->segundo_periodo; ?></td>
												<td><?php echo $key->tercer_periodo; ?></td>
												<td><?php echo $key->cuarto_periodo; ?></td>
												<td class="text-danger"><b><?php echo $key->nota_final; ?></b></td>	
												</form>																					
											</tr>
										<?php endforeach ?>	
										</table>
										<div>
									    	<div class="col-lg-6">
									      		<a href="<?php echo base_url(); ?>Estudiante/pdf/<?php echo $grupo_codigo."/".$codigo_asignacion; ?>" class="btn btn-warning">Descargar&nbsp;<span class="glyphicon glyphicon-cloud-download"></span></a>								      		
									    	</div>									    
									  	</div>
								  	</div>

								  	<div class="tab-pane grupos" id="horarios">
								  		<table class="table table-striped table-bordered grupos">
										<tr>
											<th>Horario</th>									
											<th>Grupo</th>
											<th>Materia</th>											
											<th>Dia</th>											
										</tr>
										<?php foreach ($mg as $key): ?>											
										<tr>											
											<td><?php echo $key->hora_inicio." - ".$key->hora_fin; ?></td>
											<td><?php echo $key->grupo; ?></td>
											<td><?php echo $key->nombre_materia; ?></td>
											<td><?php echo $key->dia; ?></td>
										</tr>
											<?php //endif ?>
										<?php endforeach ?>									
									</table>									
								  	</div>								  												 	
								</div>
							</div>	
						</div>						
					</div>
					<!-- =================================================== -->
					<!-- =================================================== -->
				</div>
			</div>
			<div id="cinta2">
				<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/cinta2.png">
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>