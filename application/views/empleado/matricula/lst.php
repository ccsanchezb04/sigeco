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
        				<h3 class="text-warning">Consultar datos de la matricula</h3>
        			</div>
					
					<table class="table table-striped pull-center">		
					
					<?php foreach ($lstm as $key): ?>
						<tr>
							<td>ID Matricula</td>
							<td><?php echo $key->codigo_matricula; ?></td>
						</tr>
						<tr>
							<td>ID del Estudiante Matriculado</td>
							<td><?php echo $key->no_identificacion; ?></td>
						</tr>
						<tr>
							<td>ID Inscripcion</td>
							<td><?php echo $key->inscripcion_codigo; ?></td>
						</tr>
						<tr>
							<td>Fecha Matricula</td>
							<td><?php echo $key->fecha_matricula; ?></td>
						</tr>
						<tr>
							<td>Grupo Matriculado</td>
							<td><?php echo $key->grupo; ?></td>
						</tr>
						<tr>
							<td>Estado Institucional</td>
							<td><?php echo $key->estado; ?></td>
						</tr>
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado/matricula" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>