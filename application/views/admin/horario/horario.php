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

				<div class="tab-content">
					<div class="top-bar">
						<div class="row">
							<div class="col-md-2">
								<a href="<?php echo base_url(); ?>Admin/addHorario/" class="btn btn-add">
									<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar
								</a>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-6">
								<form class="navbar-form navbar-right" role="search">
								  	<div class="form-group">
								    	<input type="text" class="form-control" placeholder="Buscar Horario">
								  	</div>
								  	<button type="submit" class="btn btn-warning">
								  		<span class="glyphicon glyphicon-search	"></span>
								  	</button>
								</form>
							</div>			
						</div>
					</div>
					<ul class="nav nav-tabs nav-users">
					  	<li class="active"><a href="#manana" data-toggle="tab">Mañana</a></li>
					  	<li><a href="#tarde" data-toggle="tab">Tarde</a></li>					  							  
					</ul>

					<div class="tab-pane active" id="manana">
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Hora Inicio</th>
								<th>Hora Final</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($lstHm as $key): ?> 
							<tr>
								<td><?php echo $key->codigo_horario; ?></td>
								<td><?php echo $key->hora_inicio; ?></td>
								<td><?php echo $key->hora_fin; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstHorario/<?php echo $key->codigo_horario; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updHorario/<?php echo $key->codigo_horario; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_horario; ?>" data-rol="horario" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
										<span class='glyphicon glyphicon-remove-sign'></span>
									</a>					
								</td>
							</tr>
							<?php endforeach ?>							
						</table>
					</div>

					<div class="tab-pane" id="tarde">
						<table class="table table-striped">
							<tr>
								<th>ID</th>
								<th>Hora Inicio</th>
								<th>Hora Final</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($lstHt as $key): ?> 
							<tr>
								<td><?php echo $key->codigo_horario; ?></td>
								<td><?php echo $key->hora_inicio; ?></td>
								<td><?php echo $key->hora_fin; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstHorario/<?php echo $key->codigo_horario; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updHorario/<?php echo $key->codigo_horario; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_horario; ?>" data-rol="horario" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
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