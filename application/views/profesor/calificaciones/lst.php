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
        				<h3 class="text-warning">Consultar Calificaciones por Grupo</h3>
        			</div>
				
					<div class="row">
					<?php foreach ($jefe as $key): ?>
						<div class="col-md-6">
							<h4>Jefe de Grupo: <?php echo $key->nombres." ".$key->apellidos; ?></h4>
						</div>
					<?php endforeach ?>
					<?php foreach ($gm as $key): ?>	
						<div class="col-md-3">
							<h4>Grupo: <?php echo $key->grupo; ?></h4>
						</div>
						<div class="col-md-3">
							<h4>Materia: <?php echo $key->nombre_materia; ?></h4>
						</div>
					<?php endforeach ?>
					</div>        				
        			
					<table class="table table-striped table-bordered pull-center">
						<tr>
							<td>No. Identificacion Estudiante</td>
							<td>Nombre Completo Profesor</td>
							<td>Nota 1er Periodo</td>
							<td>Nota 2° Periodo</td>
							<td>Nota 3er Periodo</td>
							<td>Nota 4° Periodo</td>
							<td>Nota Final</td>
						</tr>
					<?php foreach ($calif as $key): ?>
						<tr>
							<td><?php echo $key->no_identificacion; ?></td>
							<td><?php echo $key->nombres." ".$key->apellidos; ?></td>
							<td><?php echo $key->primer_periodo; ?></td>
							<td><?php echo $key->segundo_periodo; ?></td>
							<td><?php echo $key->tercer_periodo; ?></td>
							<td><?php echo $key->cuarto_periodo; ?></td>
							<td class="text-danger"><b><?php echo $key->nota_final; ?></b></td>
						</tr>																		
					<?php endforeach ?>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Profesor" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>