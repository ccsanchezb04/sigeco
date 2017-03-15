
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
					
					<?php foreach ($datosj as $key): ?>
						<tr>
							<?php if ($datosj >= 0): ?>	
							<td>Nombre Completo Jefe de Grupo</td>
							<?php 
								if ($key->nombres != "" && $key->apellidos != "")
								{
									echo "<td>".$key->nombres." ".$key->apellidos."</td>";
								}
								else
								{
									echo "<td>No hay profesor asignado a este grupo</td>";
								}
							?>
							<?php endif ?>										
						</tr>
					<?php endforeach ?>
					<?php foreach ($datosg as $key): ?>
						<tr>
							<td>Cupos Totales del Grupo</td>					
							<td><?php echo $key->cupo; ?></td>							
						</tr>
						<?php $grupo = $key->grupo; ?>
					<?php endforeach ?>

						<tr>
							<td>Total Estudiantes Inscritos</td>						
							<td><?php echo $cont = $this->db->where('grupo', $grupo)->count_all_results('inscripciones')." Estudiantes Inscritos"; ?></td>												
						</tr>
						<tr>
							<td>Total Estudiantes Matriculados</td>						
							<td><?php echo $cont1 = $this->db->where('grupo', $grupo)->count_all_results('matriculas')." Estudinates Matriculados"; ?></td>														
						</tr>
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado/grupos" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>