<?php echo validation_errors(); ?>

<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="contenedor-crud">
				<a href="<?php echo base_url(); ?>Admin/materia" type='button' class='btn btn-sm btn-danger pull-right'>
					<span class="glyphicon glyphicon-remove"></span>
				</a>
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/banner.png" title="SIGECO">
				</div>
					<div class="panel panel-default">   
	        			<div class="panel-heading">
	        				<h3 class="text-warning">Modificar Materias</h3>
	        			</div>
						<div id="frm_register">
						<?php foreach ($lstm as $key): ?>				
							<form class="form-horizontal" role="form" method="post">  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="nom-materia" name="nom-materia"  value="<?php echo $key->nombre; ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="nivel" class="form-control">
						                    <option value="">SELECCIONE NIVEL...</option>
						                    <option value="PRIMARIA" <?php if ($key->nivel == "PRIMARIA") echo "selected=''selected"; ?>>PRIMARIA</option>
						                    <option value="SECUNDARIA" <?php if ($key->nivel == "SECUNDARIA") echo "selected=''selected"; ?>>SECUNDARIA</option>
						                    <option value="MEDIA" <?php if ($key->nivel == "MEDIA") echo "selected=''selected"; ?>>MEDIA</option>
						                </select>
						                <input type="hidden" class="form-control" id="id-materia" name="id-materia" value="<?php echo $key->codigo_materia; ?>">
							    	</div>
							  	</div>				
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Modificar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
							      		<button type="reset" class="btn btn-add">Limpiar Formulario&nbsp;<span class="glyphicon glyphicon-repeat"></span></button>
							    	</div>
							  	</div>					  				
							</form>
						<?php endforeach ?>	
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>