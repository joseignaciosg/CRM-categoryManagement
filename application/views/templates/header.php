<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if( is_null($title) ):?>
	<title>Home</title>
<?php else:?>
	<title><?=$title?></title>
<?php endif;?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<?php  
echo '<link href="'.base_url().'/assets/css/bootstrap.css" rel="stylesheet">';
echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>';

?>
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
</style>
<!-- Google charts initialization-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				<?php if( isset($this->session) && ($this->session != null) && ($this->session->userdata('logged_in') == TRUE)):?>
					</a> <a class="brand" href="../pages/home"><?php echo $this->session->userdata('companyname');?> CRM</a>
				<?php else:?>
					</a> <a class="brand" href="../pages/home">Category Management CRM</a>
				<?php endif;?>
				<div class="nav-collapse">
					<ul class="nav pull-right">
					
						<?php if( isset($this->session) && ($this->session != null) && ($this->session->userdata('logged_in') == TRUE)):?>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown"> <?=$this->session->userdata('username')?> <b
									class="caret"></b></a>
								<ul class="dropdown-menu ">
									<li><a href="../user/viewer"> Visor de Clicks</a>
									</li>
<!-- 									<li><a href="http://www.categorymg.com/CM-auditor/" target="_blank" > Auditor </a> -->
<!-- 										<li><a href="../auditor/front" > Auditor </a> -->
									
<!-- 									</li> -->
									<li><a href="../user/panel"> Administrar cuenta</a></li>

									<li><a href="../user/logout"> Salir </a>
									</li>
								</ul>
							</li>
						<?php else:?>
							<li>
								<form class="navbar-form pull-right span7" action="../user/login"
									method="POST">
									<div class="pull-right">
										<input type="hidden" name="remember" id="remember" value="name" />
										<input type="text" name="user_username" class="span2" value=""
											placeholder="Usuario" /> <input type="password"
											name="user_password" class="span2"
											placeholder="Contrase&ntilde;a" /> <input type="submit"
											class="btn btn-primary" value="Entrar" />
									</div>
								</form>
							</li>
						<?php endif;?>
							
					</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>

	</div>

	<div class="container">