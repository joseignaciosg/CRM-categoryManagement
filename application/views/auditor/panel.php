<div class="row">
	<div class="span15">
		<div class="row">
			<div class="span2">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
				<li class="nav-header">Ayuda</li>
				<li <?php if($page == "front"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/auditor/help">Ayuda</a></li>';
				?>
				<li class="nav-header">Opciones</li>
				<li <?php if($page == "activelist"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/auditor/activelist">Lista Activa de Envío</a></li>';
				?>
				<li <?php if($page == "smtpserverreport"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/active/smtpserverreport">Reporte del Servidor SMTP</a></li>';
				?>
				<li <?php if($page == "badloadedinsendsystem"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/active/badloadedinsendsystem">Cargados mal en el sistema de Envío</a></li>';
				?>
				<li <?php if($page == "hardbounceslastsending"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/active/hardbounceslastsending">Hard Último Envío</a></li>';
				?>
				<li <?php if($page == "softbounceslastsending"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/active/softbounceslastsending">Soft Último Envío</a></li>';
				?>
				<li <?php if($page == "allbounceslastsending"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/active/allbounceslastsending">Todos los Rebotes Último Envío</a></li>';
				?>
				</ul>
			</div>
		</div>
		<div class="span10">
		



