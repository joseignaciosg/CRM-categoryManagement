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
            <button type="submit" class="btn btn-primary">Generar link</button>
          </div>
        </fieldset>
      </form>
      <div id="myModal" class="modal hide fade" style="display: none; ">
	      <div class="modal-header">
	      <button class="close" data-dismiss="modal">×</button>
	      <h3>Modal Heading</h3>
	      </div>
	      <div class="modal-body">
	      <h4>Popover in a modal</h4>
	      <p>This <a href="#" class="btn popover-test" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on hover.</p>
	      
	      <h4>Tooltips in a modal</h4>
	      <p><a href="#" class="tooltip-test" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>
	      
	      </div>
	      <div class="modal-footer">
	      <a href="#" class="btn" data-dismiss="modal">Close</a>
	      <a href="#" class="btn btn-primary">Save changes</a>
	      </div>
      </div>
      <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>
<?php $this->load->view('/clickviewer/panelend');?>
 
