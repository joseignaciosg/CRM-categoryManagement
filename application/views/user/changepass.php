
<?php $this->load->view('/user/panel');?>
<form class="well" action="changepass" method="POST">
<label>Ingrese la vieja contraseña</label>
<input type="text" name="old_pass" class="span3" placeholder="Vieja contraseña">
<label>Ingrese la nueva contraseña</label>
<input type="text" name="new_pass" class="span3" placeholder="Nueva contraseña">
<label>Ingrese nuevamente la nueva contraseña</label>
<input type="text" name="new_pass2" class="span3" placeholder="Nueva contraseña">
<button type="submit" class="btn">Submit</button>
</form>
<?php $this->load->view('/user/panelend');?>