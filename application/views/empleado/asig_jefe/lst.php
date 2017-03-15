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
        				<h3 class="text-warning">Consultar datos Asignacion Jefe Grupo</h3>
        			</div>
					
					<table class="table table-striped pull-center">		
					
					<?php foreach ($lstaj as $key): ?>
						<tr>
							<td>ID Asignacion Jefe de Grupo</td>
							<td><?php echo $key->codigo_aj; ?></td>
						</tr>
						<tr>
							<td>Nombre Completo Profesor</td>
							<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
						</tr>
						<tr>
							<td>Grupo Asignado</td>
							<td><?php echo $key->grupo; ?></td>
						</tr>												
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado/asignacion" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>