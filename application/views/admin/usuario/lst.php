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
        				<h3 class="text-warning">Consultar datos del usuario</h3>
        			</div>
					
					<table class="table table-striped pull-center">		
					
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
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Admin" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>