<div class="row">
	<div class="span15">
		<div class="row">
			<div class="span2">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
				<li class="nav-header">Tablas</li>
				<?php if( isset($this->session) && ($this->session != null) && ($this->session->userdata('logged_in') == TRUE)
							&& $this->session->userdata('company_id') == 1):?>
					<li <?php if($page == "tracklink"){echo 'class="active"';}?>>
					<?php  
						echo '<a href="'.base_url().'index.php/clickviewer/tracklink">Track Link</a></li>';
					?>
				<?php endif;?>
				
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
				
				<?php  
					echo '<li><a href="'.base_url().'index.php/clickviewer/downloadallclicks">Todo</a></li>';
				?>
				<?php  
					echo '<li><a href="'.base_url().'index.php/clickviewer/downloadlinkclicks">Clicks</a></li>';
				?>
				<?php  
					echo '<li><a href="'.base_url().'index.php/clickviewer/downloadopenings">Aperturas</a></li>';
				?>
				</ul>
			</div>
		</div>
		<div class="span10">