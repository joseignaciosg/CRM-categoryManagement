<div class="row">
	<div class="span15">
		<div class="row">
			<div class="span3">
			<?php if(isset($info) && $info != null): ?>
				<div class="alert alert-success">
			<?=$info?>
			</div>
			<?php endif?>
			<?php if(isset($errors) && $errors != null): ?>
				<div class="alert alert-error">
				<?=$errors?>
				</div>
			<?php endif?>
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
				<li class="nav-header">Opciones</li>
				
				<li <?php if($page == "changepassform"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/user/changepassform">Cambiar Contraseña</a></li>';
				?>
				<li <?php if($page == "seedata"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/user/seedata">Ver sus datos</a></li>';
				?>
				</ul>
			</div>
		</div>
		<div class="span7">