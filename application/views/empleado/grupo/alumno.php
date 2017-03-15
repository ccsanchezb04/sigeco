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
					
					<table class="table table-striped table-bordered pull-center">
						<tr class="text-center">
							<td>No. Identificacion Estudiante</td>
							<td>Nombre Completo Estudiante</td>
							<td>Direccion Residencia</td>
							<td>No. Telefono Movil</td>
							<td>Correo Electronico</td>
							<td>Nombre Completo Acudiente</td>
							
						</tr>
					<?php foreach ($alnm as $key): ?>						
						<tr>
							<td><?php echo $key->no_identificacion; ?></td>
							<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
							<td><?php echo $key->direccion; ?></td>
							<td><?php echo $key->tel_movil; ?></td>
							<td><?php echo $key->correo_electronico; ?></td>
							<td><?php echo $key->nombres_acudiente." ".$key->apellidos_acudiente; ?></td>
						</tr>																
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado/grupos" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>