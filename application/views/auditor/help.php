<?php $this->load->view('/auditor/panel');?>

<div id="content">
<h2>Ayuda</h2>
<div id="download_button"></div>
<div id="contentmain">
<p>
Para usar el auditor hay que seguir la siguiente serie de pasos:
<ul>
<li>Presionar en "lista activa de envío". Y luego en
							"Descargar lista". Para que se baje el documento csv con la lista
de envío.</li>
<li>Importar la lista descargada en el sistema de envío (Send
Blaster).</li>
<li>Exportar la lista cargarda del sistema de envío. Guardar
el archivo.</li>
<li>Realizar el envío del newsletter utilizando la lista
cargada en el sistema de envío. En el caso que se quiera agregar
más destinatarios del newsletter, agregarlos directamente en el
sistema de envío.</li>
<li>Exportar la lista de resultados del servidor de SMTP
(turbo smtp).</li>
<li>Cargar los dos archivos obtenidos en la base de datos del
servidor. (ver Tutorial)</li>
<li>Presionar en "ejecutar auditoría". Aparecerá la fecha y
la hora de la última vez que se hizo la audito&iacute;a, de
manera que se pueda saber si la auditoría con los archivos que se
acabaron de subir ya está hecha, y que no se está haciendo la
misma auditoría varias veces.</li>
<li>Presionar el bot&oacute;n de "ejecutar auditor&iacute;a",
y esperar a que la base de datos se actualice.</li>
<li>En este punto ya se puede acceder a través del auditor a
toda la información de la última auditoría realizada.</li>

</ul>


</p>
</div>
</div>
</br>
</br>
</br>

<?php $this->load->view('/auditor/panelend');?>
