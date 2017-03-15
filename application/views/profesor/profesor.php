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
								<?php foreach ($p as $key): ?>																
									<h3>Profesor(a): <?php echo $key->nombres." ".$key->apellidos; ?></h3>
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
												<th>Grupo</th>
												<th>Materia</th>										
												<th>Acciones</th>
											</tr>											
											<?php foreach ($mg as $key): ?>
											<tr>
												<td><?php echo $key->grupo; ?></td>
												<td><?php echo $key->nombre_materia; ?></td>										
												<td>
													<a href="<?php echo base_url(); ?>Profesor/addCalif/<?php echo $key->grupo."/".$key->codigo_asignacion; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="left" title="ASIGNAR CALIFICACION">
														<span class='glyphicon glyphicon-ok'></span>
													</a>																		
													<a href="<?php echo base_url(); ?>Profesor/lstCalif/<?php echo $key->codigo_asignacion."/".$key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="right" title="CONSULTAR CALIFICACION POR GRUPO">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
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