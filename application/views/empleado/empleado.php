
<?php $empleado = 1; ?>

<body>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

				<?php $this->load->view('layout/topnavbar') ?>

				<div class="top-bar">
					<div class="row">
						<div class="col-md-2">
							<a href="<?php echo base_url(); ?>index.php/Empleado/addInsc/" class="btn btn-add">
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
				
				<ul class="nav nav-tabs nav-users">
				  	<li class="active">
				  		<a href="#primeros" data-toggle="tab">1°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#segundos" data-toggle="tab">2°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#terceros" data-toggle="tab">3°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#cuartos" data-toggle="tab">4°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#quintos" data-toggle="tab">5°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#sextos" data-toggle="tab">6°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#septimos" data-toggle="tab">7°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#octavos" data-toggle="tab">8°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#novenos" data-toggle="tab">9°</a>				  		
				  	</li>
				  	<li>
				  		<a href="#decimos" data-toggle="tab">10°</a>
				  	</li>				  		
				  	<li>
				  		<a href="#undecimos" data-toggle="tab">11°</a>				  		
				  	</li>							  
				</ul>

				<div class="tab-content">
			<!-- ============================================================================== -->
			<!-- ================================== PRIMEROS ================================== -->				  	
				  	<div class="tab-pane active" id="primeros">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#prim-a" data-toggle="tab">1-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#prim-b" data-toggle="tab">1-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#prim-c" data-toggle="tab">1-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#prim-d" data-toggle="tab">1-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="prim-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst1a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a>
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	

								  	<div class="tab-pane" id="prim-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst1b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="prim-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst1c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="prim-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst1d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- ================================== SEGUNDOS ================================== -->				  	
				  	<div class="tab-pane" id="segundos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#secun-a" data-toggle="tab">2-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#secun-b" data-toggle="tab">2-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#secun-c" data-toggle="tab">2-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#secun-d" data-toggle="tab">2-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="secun-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst2a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="secun-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst2b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="secun-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst2c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="secun-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst2d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a> 					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- ================================== TERCEROS ================================== -->				  	
				  	<div class="tab-pane" id="terceros">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#ter-a" data-toggle="tab">3-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#ter-b" data-toggle="tab">3-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#ter-c" data-toggle="tab">3-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#ter-d" data-toggle="tab">3-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="ter-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst3a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning'>
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning'>
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a>
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="ter-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst3b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="ter-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst3c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="ter-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst3d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== CUARTOS ================================== -->				  	
				  	<div class="tab-pane" id="cuartos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#cuart-a" data-toggle="tab">4-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#cuart-b" data-toggle="tab">4-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#cuart-c" data-toggle="tab">4-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#cuart-d" data-toggle="tab">4-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="cuart-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst4a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="cuart-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst4b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="cuart-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst4c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="cuart-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst4d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== QUINTOS ================================== -->				  	
				  	<div class="tab-pane" id="quintos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#quin-a" data-toggle="tab">5-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#quin-b" data-toggle="tab">5-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#quin-c" data-toggle="tab">5-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#quin-d" data-toggle="tab">5-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="quin-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst5a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="quin-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst5b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="quin-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst5c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="quin-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst5d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== SEXTOS =================================== -->				  	
				  	<div class="tab-pane" id="sextos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#sext-a" data-toggle="tab">6-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sext-b" data-toggle="tab">6-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sext-c" data-toggle="tab">6-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sext-d" data-toggle="tab">6-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="sext-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst6a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>				
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sext-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst6b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>				
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sext-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst6c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sext-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst6d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- ================================== SEPTIMOS ================================== -->				  	
				  	<div class="tab-pane" id="septimos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#sep-a" data-toggle="tab">7-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sep-b" data-toggle="tab">7-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sep-c" data-toggle="tab">7-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#sep-d" data-toggle="tab">7-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="sep-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst7a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sep-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst7b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sep-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst7c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="sep-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst7d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcioncodigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== OCTAVOS ================================== -->				  	
				  	<div class="tab-pane" id="octavos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#oct-a" data-toggle="tab">8-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#oct-b" data-toggle="tab">8-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#oct-c" data-toggle="tab">8-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#oct-d" data-toggle="tab">8-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="oct-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst8a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="oct-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst8b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="oct-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst8c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="oct-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst8d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== NOVENOS ================================== -->				  	
				  	<div class="tab-pane" id="novenos">
				  		<div class="row">
				  			<div class="col-md-1">
				  				<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#nov-a" data-toggle="tab">9-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#nov-b" data-toggle="tab">9-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#nov-c" data-toggle="tab">9-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#nov-d" data-toggle="tab">9-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
				  				<div class="tab-content grupos">
							  		<div class="tab-pane active" id="nov-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst9a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="nov-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst9b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="nov-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst9c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="nov-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst9d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>						  	
				  			</div>
						</div>
				  	</div>
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- =================================== DECIMOS ================================== -->
					<div class="tab-pane" id="decimos">
						<div class="row">
				  			<div class="col-md-1">  				
								<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#dec-a" data-toggle="tab">10-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#dec-b" data-toggle="tab">10-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#dec-c" data-toggle="tab">10-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#dec-d" data-toggle="tab">10-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
								<div class="tab-content grupos">
									<div class="tab-pane active" id="dec-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst10a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="dec-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst10b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="dec-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst10c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="dec-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst10d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>
							</div>
						</div>
					</div>				
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->

			<!-- ============================================================================== -->
			<!-- ================================== UNDECIMOS ================================= -->
					<div class="tab-pane" id="undecimos">
						<div class="row">
				  			<div class="col-md-1">  				
								<ul class="nav nav-pills nav-users nav-stacked">
								  	<li class="active">
								  		<a href="#udec-a" data-toggle="tab">11-A</a>				  		
								  	</li>
								  	<li>
								  		<a href="#udec-b" data-toggle="tab">11-B</a>				  		
								  	</li>
								  	<li>
								  		<a href="#udec-c" data-toggle="tab">11-C</a>				  		
								  	</li>
								  	<li>
								  		<a href="#udec-d" data-toggle="tab">11-D</a>				  		
								  	</li>
								</ul>
				  			</div>
				  			<div class="col-md-9">
								<div class="tab-content grupos">
									<div class="tab-pane active" id="udec-a">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst11a as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="udec-b">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst11b as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="udec-c">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst11c as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>

								  	<div class="tab-pane" id="udec-d">
								  		<table class="table table-striped">
											<tr>
												<th>ID</th>
												<th>Fecha Inscripcion</th>
												<th>No. identificacion Estudiante</th>						
												<th>Acciones</th>
											</tr>
											<?php foreach ($lst11d as $key): ?>
											<tr>
												<td><?php echo $key->codigo_inscripcion; ?></td>
												<td><?php echo $key->fecha_inscripcion; ?></td>
												<td><?php echo $key->no_identificacion; ?></td>						
												<td>					
													<a href="<?php echo base_url(); ?>Empleado/lstInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" data-original-title="CONSULTAR">
														<span class='glyphicon glyphicon-eye-open'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/updInsc/<?php echo $key->no_identificacion; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" data-original-title="MODIFICAR">
														<span class='glyphicon glyphicon-cog'></span>
													</a>
													<a href="<?php echo base_url(); ?>Empleado/addMat/<?php echo $key->no_identificacion; ?>" type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' class='btn btn-sm btn-matricula' type='submit' data-toggle="tooltip" data-placement="bottom" data-original-title="MATRICULAR">
														<span class='glyphicon glyphicon-check'></span>
													</a> 
													<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->no_identificacion; ?>" data-rol="inscripcion" data-toggle="tooltip" data-placement="right" data-original-title="ELIMINAR">
														<span class='glyphicon glyphicon-remove-sign'></span>
													</a>					
												</td>
											</tr>
											<?php endforeach ?>
										</table>
								  	</div>
								</div>
							</div>
						</div>
					</div>				
			<!-- ============================================================================== -->
			<!-- ============================================================================== -->
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>