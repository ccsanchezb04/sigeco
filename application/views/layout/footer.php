	<script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#login').hide();
			$('.btn').tooltip();

			$('table.table').on('click', '.btn-delete', function(event) {
				event.preventDefault();
				$cnf = confirm("¿Realmente desea eliminar este registro?");

				if ($cnf == true) {

					$uid = $(this).attr("data-id");
					$rol = $(this).attr("data-rol");

					switch($rol) {
						/* ========================== ADMIN ========================== */
						case 'usuario':
							window.location.replace('<?php echo base_url(); ?>Admin/dltUser/'+$uid);
							break;

						case 'materia':
							window.location.replace('<?php echo base_url(); ?>Admin/dltMateria/'+$uid);
							break;

						case 'grupo':
							window.location.replace('<?php echo base_url(); ?>Admin/dltGrupo/'+$uid);
							break;

						case 'horario':
							window.location.replace('<?php echo base_url(); ?>Admin/dltHorario/'+$uid);
							break;

						/* ========================== EMPLEADO ========================== */

						case 'inscripcion':
							window.location.replace('<?php echo base_url(); ?>Empleado/dltInsc/'+$uid);
							break;

						case 'matricula':
							window.location.replace('<?php echo base_url(); ?>Empleado/dltMat/'+$uid);
							break;

						case 'aj':
							window.location.replace('<?php echo base_url(); ?>Empleado/dltAj/'+$uid);
							break;

						case 'asig':
							window.location.replace('<?php echo base_url(); ?>Empleado/dltAsig/'+$uid);
							break;

						default:
							alert('No se puede eliminar el registro');
							break;
					}				
				};
			});

			$('body').on('click', '.btn-login', function(event) {
				event.preventDefault();
				event.stopPropagation();				
				$('#inscripcion').hide();
				$('#inicio').hide();
				$('#login').hide();
				$('#login').fadeIn(1500);
			});

			$('body').on('click', '.cerrar', function(event) {
				event.preventDefault();
				event.stopPropagation();	
				$('#login').hide();
				$('#inscripcion').hide();
				$('#inicio').hide();
				$('#inicio').fadeIn(1500);
			});

			$('#alert-content').on('click', '#alert', function(event) {
				event.preventDefault();

				$('#alert-content').removeClass('.bounceIn');
				$('#alert-content').addClass('.bounceOut')
			});	

			/*$('body').on('click', '.btn-inscrip', function(event) {
				event.preventDefault();
				event.stopPropagation();
				// window.location.replace('<?php echo base_url(); ?>Inscripcion/inscripcion');
				$('#inicio').hide();
				$('#login').hide();
				$('#inscripcion').hide();
				$('#inscripcion').fadeIn(1500);
			});*/
		});
	</script>
	<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/bootstrapValidator.min.js"></script>
	<script src="<?php echo base_url(); ?>public/js/ajax.js"></script>	
</body>
</html>