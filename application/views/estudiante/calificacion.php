<?php //$this->load->view('layout/header'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIGECO</title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/imgs/icon.png">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrapValidator.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/calificacion.css">
</head>
<body>
	<table class="calificacion">
		<thead>
			<tr>
				<td><img src="">Logo IE</td>
				<td colspan="3">BOLETIN DE CALIFICACION</td>
				<td colspan="2"><img id="logo" src="./././public/imgs/logo1.png"></td>				
			</tr>
						
			<tr>
				<td colspan="6" id="titulo">DATOS ESTUDIANTE Y GRUPO</td>
			</tr>					
			<tr>
			<?php foreach ($e as $key): ?>
				<td colspan="3">No. Identificacion: <?php echo $key->no_identificacion; ?></td>
				<td colspan="3">Estudiante: <?php echo $key->apellidos." ".$key->nombres ?></td>
			<?php endforeach ?>		
			</tr>
			<tr>
			<?php foreach ($jefe as $row): ?>
				<td colspan="3">Jefe de grupo: <?php echo $row->apellidos." ".$row->nombres ?></td>
			<?php endforeach ?>	
			<?php foreach ($gm as $res): ?>
				<td colspan="3">Grupo: <?php echo $res->grupo; ?></td>
			<?php endforeach ?>	
			</tr>
			
			<tr>
				<td colspan="6" id="titulo">NOTAS POR PERIODOS</td>
			</tr>			
			
		</thead>
		<tbody>
			<tr>
				<td>MATERIAS</td>
				<td>1° PERIODO</td>
				<td>2° PERIODO</td>
				<td>3° PERIODO</td>
				<td>4° PERIODO</td>
				<td>NOTA FINAL</td>
			</tr>
			<?php foreach ($lca as $key): ?>
			<?php 
				$query1 = "SELECT * 
						   FROM asignaciones
						   INNER JOIN usuarios ON asignaciones.no_identificacion = usuarios.no_identificacion
						   INNER JOIN grupos ON asignaciones.grupo_codigo = grupos.codigo_grupo
						   INNER JOIN materias ON asignaciones.materia_codigo = materias.codigo_materia
						   INNER JOIN horarios ON asignaciones.horario_codigo = horarios.codigo_horario
						   WHERE asignaciones.codigo_asignacion = $key->asignacion_codigo;";
		                   
		        $query = $this->db->query($query1);
		        foreach ($query->result() as $row) 
		        {
					$materia = $row->nombre_materia;
		        }
			?>
			<tr>				
				<td><?php echo $materia; ?></td>
				<td><?php echo $key->primer_periodo; ?></td>
				<td><?php echo $key->segundo_periodo; ?></td>
				<td><?php echo $key->tercer_periodo; ?></td>
				<td><?php echo $key->cuarto_periodo; ?></td>
				<td><?php echo $key->nota_final; ?></td>			
			</tr>
			<?php endforeach ?>
			<tfoot>
				<tr>
					<td colspan="3" class="firmas">
						<section>
							________________________
							<br>
							JULANITO De TAL <br>	
							Rector
						</section>
					</td>
					<td colspan="3" class="firmas">
						<section>
							________________________ 
							<br>	
						<?php foreach ($jefe as $row): ?>
							<?php echo $row->nombres." ".$row->apellidos; ?> <br>	
						<?php endforeach ?>	
							Jefe de grupo
						</section>
					</td>
				</tr>
			</tfoot>
		</tbody>
	</table>
<?php $this->load->view('layout/footer'); ?>