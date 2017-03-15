
<nav class="navbar nav-admin" role="navigation">
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
	<?php 
	switch ($this->session->userdata('rol')) 
	{
		case 'ADMIN':
	?>
			<li <?php if ($seccion==1) echo "class='active'"; ?>>
					<a href="<?php echo base_url(); ?>Admin">
					Usuarios&nbsp;<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li <?php if ($seccion==2) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Admin/materia">
					Materias&nbsp;<span class="glyphicon glyphicon-book"></span>
				</a>
			</li>
			<li <?php if ($seccion==3) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Admin/grupo">
					Grupos&nbsp;<span class="glyphicon glyphicon-th-large"></span>
				</a>
			</li>
			<li <?php if ($seccion==4) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Admin/horario">
					Horario&nbsp;<span class="glyphicon glyphicon-time"></span>
				</a>
			</li>										
	<?php
			break;

		case 'EMPLEADO':
	?>
			<li <?php if ($seccion==1) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Empleado">
					Inscripción&nbsp;<span class="glyphicon glyphicon-user"></span>
				</a>
			</li >
			<li <?php if ($seccion==2) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Empleado/matricula">
					Matricula&nbsp;<span class="glyphicon glyphicon-check"></span>
				</a>
			</li>
			<li <?php if ($seccion==3) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Empleado/asignacion">
					Asignación&nbsp;<span class="glyphicon glyphicon-star"></span>
				</a>
			</li>
			<li <?php if ($seccion==4) echo "class='active'"; ?>>
				<a href="<?php echo base_url(); ?>Empleado/grupos">
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
				<a href="<?php echo base_url(); ?>login/close" class="btn-danger" id="btn-cerrar">
					Cerrar Sesión&nbsp;<span class="glyphicon glyphicon-log-out"></span>
				</a>
			</li>					
		</ul>
	</div>
</nav>

