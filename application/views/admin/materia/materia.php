<?php $link = 2; ?>

<body>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
				
				<nav class="navbar nav-admin" role="navigation">
					<div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				      		<span class="sr-only">Toggle navigation</span>
				      		<span class="icon-bar"></span>
				      		<span class="icon-bar"></span>
				    		<span class="icon-bar"></span>
				    	</button>
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
			   			<ul class="nav navbar-nav">

							<li>
								<a href="<?php echo base_url(); ?>Admin">
									Usiarios&nbsp;<span class="glyphicon glyphicon-user"></span>
								</a>
							</li>
							<li class="<?php if ($link==2) echo "active"; ?>">
								<a href="<?php echo base_url(); ?>Admin/materia">
									Materias&nbsp;<span class="glyphicon glyphicon-book">
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>Admin/grupo">
									Grupos&nbsp;<span class="glyphicon glyphicon-th-large">
								</a>
							</li>
							<li>
								<a href="#">
									Horario&nbsp;<span class="glyphicon glyphicon-time">
								</a>
							</li>							
							<li>
								<a href="#">
									Otros&nbsp;<span class="glyphicon glyphicon-star">
								</a>
							</li>
						</ul>
						 <ul class="nav navbar-nav navbar-right">
							<li class="pull-right">
								<a href="<?php echo base_url(); ?>index.php/login/close" class="btn-danger">
									Cerrar Sesión&nbsp;<span class="glyphicon glyphicon-log-out"></span>
								</a>
							</li>					
						</ul>
					</div>
				</nav>	
				<div class="tab-content">
					<div class="top-bar">
						<div class="row">
							<div class="col-md-2">
								<a href="<?php echo base_url(); ?>Admin/addMateria/" class="btn btn-add">
									<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar
								</a>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-6">
								<form class="navbar-form navbar-right" role="search">
								  	<div class="form-group">
								    	<input type="text" class="form-control" placeholder="Buscar Materia">
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
								<th>Nombre Materia</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($primaria as $key): ?> 
							<tr>
								<td><?php echo $key->nombre; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_materia; ?>" data-rol="materia" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
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
								<th>Nombre Materia</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($secundaria as $key): ?>
							<tr>
								<td><?php echo $key->nombre; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_materia; ?>" data-rol="materia" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
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
								<th>Nombre Materia</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($media as $key): ?>
							<tr>
								<td><?php echo $key->nombre; ?></td>
								<td>					
									<a href="<?php echo base_url(); ?>Admin/lstMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="left" title="CONSULTAR">
										<span class='glyphicon glyphicon-eye-open'></span>
									</a>
									<a href="<?php echo base_url(); ?>Admin/updMateria/<?php echo $key->codigo_materia; ?>" type='button' class='btn btn-sm btn-warning' data-toggle="tooltip" data-placement="bottom" title="MODIFICAR">
										<span class='glyphicon glyphicon-cog'></span>
									</a>
									<a href="<?php echo base_url(); ?>" type='button' class='btn btn-sm btn-danger btn-delete' data-id="<?php echo $key->codigo_materia; ?>" data-rol="materia" data-toggle="tooltip" data-placement="right" title="ELIMINAR">
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