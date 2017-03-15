<?php $data['seccion'] = 4; ?>

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
					
	  				<div class="row">
	  					<div class="col-md-2">
	  						<ul class="nav nav-pills nav-users nav-stacked">
			  					<li class="active">
							  		<a href="#primeros" data-toggle="tab">PRIMEROS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#segundos" data-toggle="tab">SEGUNDOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#terceros" data-toggle="tab">TERCEROS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#cuartos" data-toggle="tab">CUARTOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#quintos" data-toggle="tab">QUINTOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#sextos" data-toggle="tab">SEXTOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#septimos" data-toggle="tab">SEPTIMOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#octavos" data-toggle="tab">OCTAVOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#novenos" data-toggle="tab">NOVENOS</a>				  		
							  	</li>
							  	<li>
							  		<a href="#decimos" data-toggle="tab">DECIMOS</a>
							  	</li>				  		
							  	<li>
							  		<a href="#undecimos" data-toggle="tab">UNDECIMOS</a>				  		
							  	</li>
							</ul>
	  					</div>
	  					<div class="col-md-10">
							<div class="tab-content">
							  	<div class="tab-pane active" id="primeros">
									<div class="top-bar">
										<div class="row">											
											<div class="col-md-6"></div>
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstp as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?> 
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- =========================================== SEGUNDOS =========================================== -->
								<div class="tab-pane" id="segundos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lsts as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- =========================================== TERCEROS =========================================== -->
								<div class="tab-pane" id="terceros">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstt as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ CUARTOS =========================================== -->
								<div class="tab-pane" id="cuartos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstc as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ QUINTOS =========================================== -->
								<div class="tab-pane" id="quintos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstq as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ SEXTOS ============================================ -->
								<div class="tab-pane" id="sextos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstsx as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- =========================================== SEPTIMOS =========================================== -->
								<div class="tab-pane" id="septimos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstsp as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ OCTAVOS =========================================== -->
								<div class="tab-pane" id="octavos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lsto as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ NOVENOS =========================================== -->
								<div class="tab-pane" id="septimos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstn as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- ============================================ DECIMOS =========================================== -->
								<div class="tab-pane" id="decimos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstd as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->

				<!-- ================================================================================================ -->
				<!-- =========================================== UNDECIMOS ========================================== -->
								<div class="tab-pane" id="undecimos">
									<div class="top-bar">
										<div class="row">
											<div class="col-md-2">
									
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
											<th>Grupos</th>
											<th>Acciones</th>											
										</tr>
										<?php foreach ($lstud as $key): ?>
										<tr>
											<td><?php echo $key->grupo; ?></td>
											<td>					
												<a href="<?php echo base_url(); ?>Empleado/conCalf/<?php echo $key->codigo_grupo ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="left" title="CONSULTAR CALIFICACIONES GENERALES">
													<span class='glyphicon glyphicon-th-large'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conAlnm/<?php echo $key->grupo; ?>" type='button' class='btn btn-sm btn-matricula'  data-toggle="tooltip" data-placement="bottom" title="CONSULTAR LISTADO DE ESTUDIANTES">
													<span class='glyphicon glyphicon-th-list'></span>
												</a>
												<a href="<?php echo base_url(); ?>Empleado/conGrupo/<?php echo $key->codigo_grupo."/".$key->grupo; ?>" type='button' class='btn btn-sm btn-warning'  data-toggle="tooltip" data-placement="right" title="CONSULTAR DATOS DEL GRUPO">
													<span class='glyphicon glyphicon-eye-open'></span>
												</a>					
											</td>
										</tr>
										<?php endforeach ?>
									</table>
								</div>
				<!-- ================================================================================================ -->
				<!-- ================================================================================================ -->
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