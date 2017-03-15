<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

				<div class="panel panel-default">   
        			<div class="panel-heading">
        				<h3 class="text-warning">Consultar datos de la materia</h3>
        			</div>
					
					<table class="table table-striped pull-center">		
					
					<?php foreach ($lstm as $key): ?>
						<tr>
							<td>ID</td>
							<td><?php echo $key->codigo_materia; ?></td>
						</tr>
						<tr>
							<td>Nombre</td>
							<td><?php echo $key->nombre_materia; ?></td>
						</tr>
						<tr>
							<td>Nivel</td>
							<td><?php echo $key->nivel; ?></td>
						</tr>
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Admin/materia" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>