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
	        				<h3 class="text-warning">Agregar Materias</h3>
	        			</div>
						<div id="frm_register">				
							<form class="form-horizontal" role="form" method="post">  
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<input type="text" class="form-control" id="nom-materia" name="nom-materia" placeholder="NOMBRE DE MATERIA" value="<?php echo set_value('nom-materia') ?>">
							    	</div>
							  	</div>
							  	<div class="form-group">
							    	<div class="col-lg-10">
							      		<select name="nivel" class="form-control">
						                    <option value="">SELECCIONE NIVEL...</option>
						                    <option value="PRIMARIA">PRIMARIA</option>
						                    <option value="SECUNDARIA">SECUNDARIA</option>
						                    <option value="MEDIA">MEDIA</option>
						                </select>
						                <input type="hidden" class="form-control" id="id-materia" name="id-materia" value="0">
							    	</div>
							  	</div>				
							  	<div class="form-group">
							    	<div class="col-lg-6">
							      		<button type="submit" class="btn btn-warning">Agregar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button>
							      		<button type="reset" class="btn btn-add">Limpiar Formulario&nbsp;<span class="glyphicon glyphicon-repeat"></span></button>
							    	</div>
							  	</div>					  				
							</form>
						</div>				
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>