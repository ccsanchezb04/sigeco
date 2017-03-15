<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor">
				<a href="<?php echo base_url(); ?>Profesor" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>

				<div class="panel panel-default">   
        			<div class="panel-heading">
        				<h3 class="text-warning">Agregar Calificaciones</h3>			
        			</div>					
    				<div class="row">
    				<?php foreach ($gm as $key): ?>
    					<div class="col-md-4">        						
    					</div>
    					<div class="col-md-4">
    						<h4>Grupo: <?php echo $key->grupo; ?></h4>
    					</div>
    					<div class="col-md-4">
    						<h4>Materia: <?php echo $key->nombre_materia; ?></h4>
    					</div>
    				<?php endforeach ?>
    				</div>
        			
					<table class="table table-striped table-bordered pull-center">
						<tr>
							<th>No. Identificacion Estudiante</th>
							<th>Nombre Completo Estudiante</th>
							<th>Nota 1er Periodo</th>
							<th>Nota 2° Periodo</th>
							<th>Nota 3er Periodo</th>
							<th>Nota 4° Periodo</th>
							<th>Nota Final</th>							
						</tr>
						<form class="form-horizontal" role="form" method="post">
						<?php $cont = 1; ?>
					<?php foreach ($alnm as $key): ?>
					<?php 

						$query = $this->db->get_where('calificaciones', array('no_identificacion' => $key->no_identificacion));
						foreach ($query->result() as $row) 
						{
							$idCalif = $row->codigo_calificacion;
							$nt1 = $row->primer_periodo;
							$nt2 = $row->segundo_periodo;
							$nt3 = $row->tercer_periodo;
							$nt4 = $row->cuarto_periodo;
							$ntf = $row->nota_final;
						}					
						
					?>											
						<tr>
							<td>
								<?php echo $key->no_identificacion; ?>
								<input type="hidden" name="id<?php echo $cont; ?>" value="<?php echo $key->no_identificacion; ?>">
								<input type="hidden" name="id-calif<?php echo $cont; ?>" value="<?php if (isset($idCalif)) echo $nt1;  ?>">
							</td>
							<td><?php echo $key->apellidos." ".$key->nombres; ?></td>
							<td><input type="number" name="nota1_<?php echo $cont; ?>" id="calif" value="<?php if (isset($nt1)) echo $nt1;  ?>" max="5" min="0"></td>
							<td><input type="number" name="nota2_<?php echo $cont; ?>" id="calif" value="<?php if (isset($nt2)) echo $nt2;  ?>" max="5" min="0"></td>
							<td><input type="number" name="nota3_<?php echo $cont; ?>" id="calif" value="<?php if (isset($nt3)) echo $nt3;  ?>" max="5" min="0"></td>
							<td><input type="number" name="nota4_<?php echo $cont; ?>" id="calif" value="<?php if (isset($nt4)) echo $nt4;  ?>" max="5" min="0"></td>
							<td><input type="text" readonly="" name="nota_f-<?php echo $cont; ?>" id="valor" class="text-danger" value="<?php echo $promedio = ($nt1+$nt2+$nt3+$nt4)/4; ?>"></td>
						</tr>
						<?php $cont++; ?>																				
					<?php endforeach ?>
					<?php



						if (isset($nt1) || isset($nt2) || isset($nt3) || isset($nt4)) 
						{
							echo '<input type="hidden" name="estado" value="true">';
						}

					?>
					<input type="hidden" name="id-calif" value="1">
					<input type="hidden" name="contador" value="<?php echo $cont-1; ?>">						
					</table>
							<div class="form-group">
						    	<div class="col-lg-6">
						      		<button type="submit" class="btn btn-warning">Agregar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>						      		
						    	</div>
						  	</div>
						</form>			
				</div>
				
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>