
<!-- Information message -->

<?php if(isset($info) && $info != null): ?>
<div class="alert alert-success">
<?=$info?>
</div>

<?php endif?>
<!-- Error message -->


<?php if(isset($errors) && $errors != null): ?>
<div class="alert alert-error">
<?=$errors?>
</div>

<?php endif?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<?php if( isset($this->session) && ($this->session != null) && ($this->session->userdata('logged_in') == TRUE)):?>
		<h1><?php echo $this->session->userdata('companyname');?> CRM</h1>
	<?php else:?>
		<h1>Category Management Inc. CRM</h1>
	<?php endif;?>
	<p></p>
	<p>
		<a class="btn btn-primary btn-large" href="../pages/about">Acerca de la herramienta&raquo;</a>
	</p>
</div>

<!-- Example row of columns -->
<!-- <div class="row"> -->
<!-- 	<div class="span4"> -->
<!-- 		<h2>Site</h2> -->
<!-- 		<p align="justify">Sitio web de la empresa. Category Management Inc -->
<!-- 			desarrolla desde hace más de 10 años su actividad para los países de -->
<!-- 			habla hispana.</p> -->
<!-- 		<p> -->
<!-- 			<a class="btn" href="http://www.categorymg.com" target="_blank">Ir -->
<!-- 				&raquo;</a> -->
<!-- 		</p> -->
<!-- 	</div> -->
<!-- 	<div class="span4"> -->
<!-- 		<h2>Blog</h2> -->
<!-- 		<p align="justify">Blog de la empresa. En el marco de un universo -->
<!-- 			minorista que presenta permanentemente novedosos desafíos, se -->
<!-- 			desarrollan una serie de retos que se extienden por un lado, a los -->
<!-- 			fabricantes que utilizan los canales masivos de distribución, y por -->
<!-- 			el otro, a los diferentes perfiles de consumidores. Frente a esto, -->
<!-- 			Category Management Inc. trabaja junto a sus clientes en Consultoría -->
<!-- 			y Capacitación para que potencien sus fortalezas actuales y adquieran -->
<!-- 			nuevas habilidades.</p> -->
<!-- 		<p> -->
<!-- 			<a class="btn" href="http://blogcategorymanagement.com" -->
<!-- 				target="_blank">Ir &raquo;</a> -->
<!-- 		</p> -->
<!-- 	</div> -->
<!-- </div> -->

<hr>
