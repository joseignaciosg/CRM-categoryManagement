<?php $this->load->view('/clickviewer/panel');?>
<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="select01">Elegir Newsletter</label>
            <div class="controls">
              <select id="select01">
                <option>newsletter 1</option>
                <option>newsletter 2</option>
                <option>newsletter 3</option>
                <option>newsletter 4</option>
                <option>newsletter 5</option>
              </select>
            </div>
            <div class="controls">
              <p class="help-block">Elija aquí el newsletter que desea enviar en esta campaña.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Nombre de Campaña</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
              <p class="help-block">Introduzca aquí el nombre que quiere que tenga su campaña.</p>
            </div>
          </div>
          <div class="form-actions">
         	 <button type="button" class="btn btn-primary" id="genlink">Generate Link</button>
          </div>
        </fieldset>
      </form>
      <div id="myModal" class="modal hide fade" style="display: none; ">
	      <div class="modal-header">
	      <button class="close" data-dismiss="modal">×</button>
	      <h3>Su link Es:</h3>
	      </div>
	      <div class="modal-body">
	      <h4>link</h4>
	      
	      <div class="modal-footer">
	      <a href="#" class="btn" data-dismiss="modal">Close</a>
	      <a href="#" class="btn btn-primary">Save changes</a>
	      </div>
      </div>
      
      
      
      
      
      
<?php $this->load->view('/clickviewer/panelend');?>
 
