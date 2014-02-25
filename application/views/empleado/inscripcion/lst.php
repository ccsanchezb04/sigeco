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
        				<h3 class="text-warning">Consultar datos de la inscripcion</h3>
        			</div>
					
					<table class="table table-striped pull-center">		
						<tr>
							<th colspan="2" class="text-warning text-center">Datos Estudiante</th>
						</tr>
					<?php foreach ($lstu as $key): ?>
						<tr>
							<td>N° de Identificacion</td>
							<td><?php echo $key->no_identificacion; ?></td>
						</tr>
						<tr>
							<td>Nombres y Apellidos</td>
							<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
						</tr>
						<tr>
							<td>Direccion de Residencia</td>
							<td><?php echo $key->direccion; ?></td>
						</tr>
						<tr>
							<td>Telefono Fijo</td>
							<td><?php echo $key->tel_fijo; ?></td>
						</tr>
						<tr>
							<td>Telefono Movil</td>
							<td><?php echo $key->tel_movil; ?></td>
						</tr>
						<tr>
							<td>Correo Electronico</td>
							<td><?php echo $key->correo_electronico; ?></td>
						</tr>
						<tr>
							<td>Rol</td>
							<td><?php echo $key->rol; ?></td>
						</tr>
						<tr>
							<td>Estado</td>
							<td><?php echo $key->estado; ?></td>
						</tr>
					<?php endforeach ?>
						<tr>
							<th colspan="2" class="text-warning text-center">Datos Acudiente</th>
						</tr>
					<?php foreach ($lstu as $key): ?>
						<tr>
							<td>Nombres y Apellidos del Acudienye</td>
							<td><?php echo $key->nombres_acudiente." ".$key->apellidos_acudiente; ?></td>
						</tr>
						<tr>
							<td>Telfono Movil Acudiente</td>
							<td><?php echo $key->tel_movil_acudiente; ?></td>
						</tr>
						<tr>
							<td>Correo Electronico Acudiente</td>
							<td><?php echo $key->correo_acudiente; ?></td>
						</tr>
					<?php endforeach ?>
						<tr>
							<th colspan="2" class="text-warning text-center">Datos Padre y Madre</th>
						</tr>
					<?php foreach ($lstu as $key): ?>	
						<tr>
							<td>Nombres y Apellidos del Padre</td>
							<td><?php echo $key->nombres_padre." ".$key->apellidos_padre; ?></td>
						</tr>
						<tr>
							<td>Telefono Movil Padre</td>
							<td><?php echo $key->tel_movil_padre; ?></td>
						</tr>
						<tr>
							<td>Nombres y Apellidos de la Madre</td>
							<td><?php echo $key->nombres_madre." ".$key->apellidos_madre; ?></td>
						</tr>
						<tr>
							<td>Telefono Movil Madre</td>
							<td><?php echo $key->tel_movil_madre; ?></td>
						</tr>
					<?php endforeach ?>
						<tr>
							<th colspan="2" class="text-warning text-center">Datos Inscripcion</th>
						</tr>
					<?php foreach ($lsti as $key): ?>	
						<tr>
							<td>ID Inscripcion</td>
							<td><?php echo $key->codigo_inscripcion; ?></td>
						</tr>
						<tr>
							<td>Fecha Inscripcion</td>
							<td><?php echo $key->fecha_inscripcion; ?></td>
						</tr>
						<tr>
							<td>Grupo Inscrito</td>
							<td><?php echo $key->grupo; ?></td>
						</tr>						
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>