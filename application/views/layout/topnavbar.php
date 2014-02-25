<?php 
	$admin = 0;
	$empleado =0;
?>
<nav class="navbar nav-admin" role="navigation">
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
	<?php 
	switch ($this->session->userdata('rol')) 
	{
		case 'ADMIN':
	?>
			<li class="<?php if ($admin==1) echo "active"; ?>">
					<a href="<?php echo base_url(); ?>Admin">
					Usuarios&nbsp;<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li class="<?php if ($admin==2) echo "active"; ?>">
				<a href="<?php echo base_url(); ?>Admin/materia">
					Materias&nbsp;<span class="glyphicon glyphicon-book"></span>
				</a>
			</li>
			<li class="<?php if ($admin==3) echo "active"; ?>">
				<a href="<?php echo base_url(); ?>Admin/grupo">
					Grupos&nbsp;<span class="glyphicon glyphicon-th-large"></span>
				</a>
			</li>
			<li class="<?php if ($admin==4) echo "active"; ?>">
				<a href="#">
					Horario&nbsp;<span class="glyphicon glyphicon-time"></span>
				</a>
			</li>							
			<li class="<?php if ($admin==5) echo "active"; ?>">
				<a href="#">
					Otros&nbsp;<span class="glyphicon glyphicon-star"></span>
				</a>
			</li>
	<?php
			break;

		case 'EMPLEADO':
	?>
			<li class="<?php if ($empleado==1) echo "active"; ?>">
				<a href="#">
					Inscripción&nbsp;<span class="glyphicon glyphicon-user"></span>
				</a>
			</li class="<?php if ($empleado==2) echo "active"; ?>">
			<li>
				<a href="#">
					Matricula&nbsp;<span class="glyphicon glyphicon-check"></span>
				</a>
			</li>
			<li class="<?php if ($empleado==3) echo "active"; ?>">
				<a href="#">
					Asignación&nbsp;<span class="glyphicon glyphicon-star"></span>
				</a>
			</li>
			<li class="<?php if ($empleado==4) echo "active"; ?>">
				<a href="#">
					Estudiantes&nbsp;<span class="glyphicon glyphicon-lock"></span>
				</a>
			</li>
			<li class="<?php if ($empleado==5) echo "active"; ?>">
				<a href="#">
					Grupos&nbsp;<span class="glyphicon glyphicon-th-large"></span>
				</a>
			</li>
	<?php
			break;
	}
	?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="<?php echo base_url(); ?>login/close" class="btn-danger">
					Cerrar Sesión&nbsp;<span class="glyphicon glyphicon-log-out"></span>
				</a>
			</li>					
		</ul>
	</div>
</nav>

