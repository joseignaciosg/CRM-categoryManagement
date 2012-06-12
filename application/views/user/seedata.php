
<?php $this->load->view('/user/panel');?>


<h2>Los siguientes son su datos actuales:</h1>

<?php
              foreach ( $results->result() as $row)
		      {
					echo "<h3><br>Nombre de Usuario:</br> $row->username</h3>";
					echo "<h3><br>Nombre de Empresa:</br> $row->nombre</h3>";
			  }
?>

<?php $this->load->view('/user/panelend');?>