
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="../../assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
</style>

</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="#">Category Management CRM</a>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<?php if( $user_username == null):?>
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
						<?php else:?>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown"> <?=$user_username?> <b
									class="caret"></b></a>
								<ul class="dropdown-menu ">
									<li><a href="#"> About</a>
									</li>
									<li><a href="../pages/home"> Salir </a>
									</li>
								</ul>
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