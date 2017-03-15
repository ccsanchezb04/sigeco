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

				<div class="tab-content">
					<div class="top-bar">
						<div class="row">
							<div class="col-md-2">
								<a href="<?php echo base_url(); ?>Admin/addGrupo/" class="btn btn-add">
									<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar
								</a>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-6">
								<form class="navbar-form navbar-right" role="search">
								  	<div class="form-group">
								    	<input type="text" class="form-control" placeholder="Buscar Grupo">
								  	</div>
								  	<button type="submit" class="btn btn-warning">
								  		<span class="glyphicon glyphicon-search	"></span>
								  	</button>
								</form>
							</div>			
						</div>
					</div>
					<ul class="nav nav-tabs nav-users">
					  	<li class="active"><a href="#prim" data-toggle="tab">Primaria</a></li>
					  	<li><a href="#secun" data-toggle="tab">Secundaria</a></li>
					  	<li><a href="#media" data-toggle="tab">Media</a></li>						  
					</ul>

					<div class="tab-pane active" id="prim">
						<table class="table table-striped">
							<tr>
								<th>Nombre Grupo</th>
								<th>Cupo</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($primaria as $key): ?> 
							<tr>
								<td><?php echo $key->grupo; ?></td>
								<td><?php echo $key->cupo; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_grupo; ?>" data-rol="grupo" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
										<span class='glyphicon glyphicon-remove-sign'></span>
									</a>					
								</td>
							</tr>
							<?php endforeach ?>							
						</table>
					</div>
					<div class="tab-pane" id="secun">
						<table class="table table-striped">
							<tr>
								<th>Nombre Grupo</th>
								<th>Cupo</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($secundaria as $key): ?>
							<tr>
								<td><?php echo $key->grupo; ?></td>
								<td><?php echo $key->cupo; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_grupo; ?>" data-rol="grupo" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
										<span class='glyphicon glyphicon-remove-sign'></span>
									</a>					
								</td>
							</tr>
							<?php endforeach ?>								
						</table>
					</div>

					<div class="tab-pane" id="media">
						<table class="table table-striped">
							<tr>
								<th>Nombre Grupo</th>
								<th>Cupo</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($media as $key): ?>
							<tr>
								<td><?php echo $key->grupo; ?></td>
								<td><?php echo $key->cupo; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updGrupo/<?php echo $key->codigo_grupo; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_grupo; ?>" data-rol="grupo" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
										<span class='glyphicon glyphicon-remove-sign'></span>
									</a>					
								</td>
							</tr>
							<?php endforeach ?>								
						</table>
					</div>
				</div>
			</div>
			<div id="cinta2">
				<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/cinta2.png">
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>