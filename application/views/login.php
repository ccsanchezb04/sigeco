<body>

	<div class="row" id="login">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="contenedor">
				<div class="logo">
					<img class="img-responsive" src="<?php echo base_url(); ?>public/imgs/logo.png" title="SIGECO">
				</div>
				<div class="panel panel-default panel-login">   
        			<div class="panel-heading">
        				<h3 class="text-warning">Inicio de Sesión</h3>
        			</div>
        			<div class="panel-body">					
						<form class="form-horizontal" role="form" method="post" id="btfrm_login">
						  	<div class="form-group">
						    	<div class="col-lg-12">
						      		<input type="text" class="form-control" name="id" placeholder="No. Idetificacion">
						    	</div>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-lg-12">
						      		<input type="password" class="form-control" name="password" placeholder="Contraseña">
						    	</div>
						  	</div>			
						  	<div class="form-group">
						    	<div class="col-lg-12">
						      		<button type="submit" class="btn btn-warning">
						      			Ingresar&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
						      		</button>

						      		<button type='button' class='btn btn-danger cerrar'>
										Cancelar&nbsp;<span class="glyphicon glyphicon-remove"></span>
									</button>
						    	</div>
						  	</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
