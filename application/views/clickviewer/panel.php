<div class="row">
	<div class="span15">
		<div class="row">
			<div class="span2">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
				<li class="nav-header">Tablas</li>
				<li <?php if($page == "tracklink"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/clickviewer/tracklink">Track Link</a></li>';
				?>
				<li <?php if($page == "openings"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/clickviewer/openings">Ver Aperturas</a></li>';
				?>
				<li <?php if($page == "clicks"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/clickviewer/clicks">Ver Clicks</a></li>';
				?>
				<li class="nav-header">Gráficos</li>
				<li <?php if($page == "newslettergraph"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/clickviewer/newslettergraph">Por Newsletter</a></li>';
				?>
				<li <?php if($page == "campaigngraph"){echo 'class="active"';}?>>
				<?php  
					echo '<a href="'.base_url().'index.php/clickviewer/campaigngraph">Por Campaña</a></li>';
				?>
				<li class="nav-header">Descargar</li>
				<li><a href="#">Todo</a></li>
				<li><a href="#">Clicks</a></li>
				<li><a href="#">Aperturas</a></li>
				</ul>
			</div>
		</div>
		<div class="span10">
		



