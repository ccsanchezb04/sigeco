<?php $data['seccion'] = 1; ?>

<body>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

				<?php $this->load->view('layout/topnavbar', $data); ?>				

				<!-- Tab panels -->
				<div class="tab-content">
					<!-- =================================================== -->
					<!-- ===================== Usuario ===================== -->
					<div class="tab-pane active" id="usuario">

						<div class="top-bar">
							<div class="row">
								<div class="col-md-2">
									<a href="<?php echo base_url(); ?>index.php/Admin/addUser/" class="btn btn-add">
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

						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-users">
						  	<li class="active"><a href="#admins" data-toggle="tab">Administradores</a></li>
						  	<li><a href="#employee" data-toggle="tab">Empleados</a></li>
						  	<li><a href="#teachers" data-toggle="tab">Profesores</a></li>						  
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						  	<div class="tab-pane active" id="admins">
						  		<table class="table table-striped">
									<tr>
										<th>ID</th>
										<th>Nombre Completo</th>
										<th>Telefono Movil</th>
										<th>Correo</th>
										<th>Acciones</th>
									</tr>
									<?php foreach ($lsta as $key): ?>
									<tr>
										<td><?php echo $key->no_identificacion; ?></td>
										<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
										<td><?php echo $key->tel_movil; ?></td>
										<td><?php echo $key->correo_electronico; ?></td>
										<td>					
											<a href="<?php echo base_url(); ?>Admin/lstUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="left" title="CONSULTAR">
												<span class='glyphicon glyphicon-eye-open'></span>
											</a>
											<a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
												<span class='glyphicon glyphicon-cog'></span>
											</a>
											<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="usuario"  data-toggle="tooltip" data-placement="right" title="ELIMINAR">
												<span class='glyphicon glyphicon-remove-sign'></span>
											</a>					
										</td>
									</tr>
									<?php endforeach ?>
								</table>
						  	</div>
						 	<div class="tab-pane" id="employee">
						 		<table class="table table-striped">
									<tr>
										<th>ID</th>
										<th>Nombre Completo</th>
										<th>Telefono Movil</th>
										<th>Correo</th>
										<th>Acciones</th>
									</tr>
									<?php foreach ($lste as $key): ?>
									<tr>
										<td><?php echo $key->no_identificacion; ?></td>
										<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
										<td><?php echo $key->tel_movil; ?></td>
										<td><?php echo $key->correo_electronico; ?></td>
										<td>					
											<a href="<?php echo base_url(); ?>Admin/lstUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
												<span class='glyphicon glyphicon-eye-open'></span>
											</a>
											<a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
												<span class='glyphicon glyphicon-cog'></span>
											</a>
											<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="usuario" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
												<span class='glyphicon glyphicon-remove-sign'></span>
											</a>					
										</td>
									</tr>
									<?php endforeach ?>			
								</table>
						 	</div>
						 	<div class="tab-pane" id="teachers">
						 		<table class="table table-striped">
									<tr>
										<th>ID</th>
										<th>Nombre Completo</th>
										<th>Telefono Movil</th>
										<th>Correo</th>
										<th>Acciones</th>
									</tr>
									<?php foreach ($lstp as $key): ?>
									<tr>
										<td><?php echo $key->no_identificacion; ?></td>
										<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
										<td><?php echo $key->tel_movil; ?></td>
										<td><?php echo $key->correo_electronico; ?></td>
										<td>					
											<a href="<?php echo base_url(); ?>Admin/lstUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
												<span class='glyphicon glyphicon-eye-open'></span>
											</a>
											<a href="<?php echo base_url(); ?>Admin/updUser/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
												<span class='glyphicon glyphicon-cog'></span>
											</a>
											<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="usuario" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
												<span class='glyphicon glyphicon-remove-sign'></span>
											</a>					
										</td>
									</tr>
									<?php endforeach ?>								
								</table>
						 	</div>						 	
						</div>
						
					</div>
					<!-- =================================================== -->
					<!-- =================================================== -->


					<!-- =================================================== -->
					<!-- ===================== * ===================== -->
					<div class="tab-pane" id="hora">
						
						<div class="top-bar">
							<div class="row">
								<div class="col-md-2">
									<a data-toggle="modal" href="#myModal3" class="btn btn-add">
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

					</div>
					<!-- =================================================== -->
					<!-- =================================================== -->


					<!-- =================================================== -->
					<!-- ===================== * ===================== -->
					<div class="tab-pane" id="estado">
						
						<div class="top-bar">
							<div class="row">
								<div class="col-md-2">
									<a data-toggle="modal" href="#myModal3" class="btn btn-add">
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

					</div>
					<!-- =================================================== -->
					<!-- =================================================== -->


					<!-- =================================================== -->
					<!-- ===================== * ===================== -->
					<div class="tab-pane" id="otro">
						
						<div class="top-bar">
							<div class="row">
								<div class="col-md-2">
									<a data-toggle="modal" href="#myModal3" class="btn btn-add">
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

					</div>
					<!-- =================================================== -->
					<!-- =================================================== -->
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>