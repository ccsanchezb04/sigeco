<?php $data['seccion'] = 3; ?>

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

				<?php $this->load->view('layout/topnavbar', $data); ?>				

				<!-- Tab panels -->
				<div class="tab-content">
					<!-- =================================================== -->
					<!-- ===================== Usuario ===================== -->
					<ul class="nav nav-tabs nav-users">
					  	<li class="active"><a href="#asig" data-toggle="tab">Asignacion</a></li>
					  	<li><a href="#jefes" data-toggle="tab">Asignacion Jefe Grupo</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane " id="jefes">

							<div class="top-bar">
								<div class="row">
									<div class="col-md-2">
										<a href="<?php echo base_url(); ?>index.php/Empleado/addAj/" class="btn btn-add">
											<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar
										</a>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-6">
										<form class="navbar-form navbar-right" role="search">
										  	<div class="form-group">
										    	<input type="text" class="form-control" placeholder="Buscar Usuario">
										  	</div>
										  	<button type="submit" class="btn btn-warning">
										  		<span class="glyphicon glyphicon-search	"></span>
										  	</button>
										</form>
									</div>			
								</div>
							</div>

					  		<table class="table table-striped">
								<tr>
									<th>ID Asignacion Jefe de Grupo</th>
									<th>Nombre Profesor</th>
									<th>Grupo</th>
									<th>Acciones</th>
								</tr>
								<?php foreach ($lstaj as $key): ?>
								<tr>
									<td><?php echo $key->codigo_aj; ?></td>									
									<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
									<td><?php echo $key->grupo; ?></td>

									<td>					
										<a href="<?php echo base_url(); ?>Empleado/lstAj/<?php echo $key->codigo_aj."/".$key->no_identificacion."/".$key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="left" title="CONSULTAR">
											<span class='glyphicon glyphicon-eye-open'></span>
										</a>
										<a href="<?php echo base_url(); ?>Empleado/updAj/<?php echo $key->codigo_aj."/".$key->no_identificacion."/".$key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
											<span class='glyphicon glyphicon-cog'></span>
										</a>
										<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_aj; ?>" data-rol="aj"  data-toggle="tooltip" data-placement="right" title="ELIMINAR">
											<span class='glyphicon glyphicon-remove-sign'></span>
										</a>					
									</td>
								</tr>
								<?php endforeach ?>
							</table>
					  	</div>
					 	<div class="tab-pane active" id="asig">

							<div class="top-bar">
								<div class="row">
									<div class="col-md-3">
										<a href="<?php echo base_url(); ?>Empleado/addAsig/" class="btn btn-add">
											<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar
										</a>
									</div>
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<form class="navbar-form navbar-right" role="search">
										  	<div class="form-group">
										    	<input type="text" class="form-control" placeholder="Buscar Usuario">
										  	</div>
										  	<button type="submit" class="btn btn-warning">
										  		<span class="glyphicon glyphicon-search	"></span>
										  	</button>
										</form>
									</div>			
								</div>
							</div>

						
							<div class="row">				  		
					  			<div class="col-md-3">
					  				<ul class="nav nav-pills nav-users nav-stacked">
					  				<?php //$cont = 1; ?>
					  				<?php foreach ($lstp as $key): ?>
					  					<li class="<?php  //if ($cont == 1) echo "active"; ?>">
									  		<a href="<?php echo base_url(); ?>Empleado/asig/<?php echo $key->no_identificacion; ?>" ><?php echo $key->nombres." ".$key->apellidos; ?></a>				  		
									  		<?php //$cont++; ?>
									  	</li>
					  				<?php endforeach ?>
									</ul>
					  			</div>
								<div class="col-md-7">
									<table class="table table-striped table-bordered grupos">
										<tr>
											<th>Horario</th>									
											<th>Grupo</th>
											<th>Materia</th>											
											<th>Dia</th>
											<th>Acciones</th>
										</tr>
										<?php $cont = 1; ?>
										<?php foreach ($lsta as $key): ?>
											<b><?php $cont++; ?></b> 
											<?php if ($cont == ""): ?>
										<tr>
											<td class="alert alert-warning" colspan="5">Este profesor no tiene ningun horario asignado.</td>
										</tr>	
											<?php else: ?>											
										<tr>											
											<td><?php echo $key->hora_inicio." - ".$key->hora_fin; ?></td>
											<td><?php echo $key->grupo; ?></td>
											<td><?php echo $key->nombre_materia; ?></td>
											<td><?php echo $key->dia; ?></td>											
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/lstAsig/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/updAsig/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
													<span class='glyphicon glyphicon-cog'></span>
												</a>
												<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_asignacion; ?>" data-rol="asig" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
													<span class='glyphicon glyphicon-remove-sign'></span>
												</a>					
											</td>
										</tr>
											<?php endif ?>
										<?php endforeach ?>									
									</table>
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
		<div class="col-md-1"></div>
	</div>