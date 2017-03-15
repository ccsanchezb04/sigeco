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
							<h4>Grupo: <?php echo $grupo = $key->grupo; ?></h4>
						</div>
					<?php endforeach ?>
					</div>        				
        			
					<table class="table table-striped table-bordered pull-center">
						<tr>
							<td>No. Identificacion Estudiante</td>
							<td>Nombre Completo Estudiante</td>						
							<?php 
								$query1 = "SELECT *
										   FROM matriculas
										   INNER JOIN usuarios
										   ON matriculas.no_identificacion = usuarios.no_identificacion
										   WHERE matriculas.grupo = '$grupo'
					   					   ORDER BY usuarios.apellidos ASC;";
								$query = $this->db->query($query1);
						        foreach ($query->result() as $row) 
						        {
									$idEstu = $row->no_identificacion;
									$nomEstu = $row->apellidos." ".$row->nombres;
									$query2 = "SELECT * 
					   						   FROM calificaciones
					   						   INNER JOIN usuarios ON calificaciones.no_identificacion = usuarios.no_identificacion
					   						   INNER JOIN asignaciones ON calificaciones.asignacion_codigo = asignaciones.codigo_asignacion				   
					   						   WHERE usuarios.no_identificacion = $idEstu;";
					   				$query = $this->db->query($query2);
						        	foreach ($query->result() as $cal)
						        	{					        		
						        		$np1 = $cal->primer_periodo;
						        		$query3 = "SELECT * 
							   			           FROM asignaciones
							   			           INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
							   			           INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
							   			           INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
							   			           INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
							   			           WHERE asignaciones.grupo_codigo = $cal->grupo_codigo;";
							   			$query = $this->db->query($query3);
							        	foreach ($query->result() as $mat)
							        	{
							        		$materia = $mat->nombre_materia;
							        	}
							        } 
						    ?> 
						         	
							<td><?php echo $materia; ?></td>
						</tr>
						<tr>
							<td><?php echo $idEstu; ?></td>
							<td><?php echo $nomEstu; ?></td>
							<td><?php echo $np1; ?></td>							
						</tr>
							<?php        
						        }
							?>						
					</table>		
				</div>
				<a href="<?php echo base_url(); ?>Empleado/grupos" type='button' class='btn btn-sm btn-danger'>
					<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
				</a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>