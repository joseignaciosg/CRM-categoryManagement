<?php $this->load->view('/clickviewer/panel');?>
<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="select01">Elegir Newsletter</label>
            <div class="controls">
              <select id="select01">
              <?php
	              foreach ( $results->result() as $row)
			      {
   					echo "<option value=\"$row->newsletter_id\">$row->name</option>";
				  }
              ?>
              </select>
              <?php
	              echo "<input id=\"companyid\" type=\"hidden\" value=\"$company\" />";
              ?>
              
            </div>
            <div class="controls">
              <p class="help-block">Elija aquí el newsletter que desea enviar en esta campaña.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="campaign_name">Nombre de Campaña</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="campaign_name">
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
	      <h4 id="linktext">
			</h4>
	      
	      <div class="modal-footer">
	      <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
	      </div>
      </div>
      </div>

<script>
	$("#genlink").click(function() {
		options = new Object();
		var company = $("#companyid").val();
		var newsletter = $("select#select01 option:selected").val();
		var campaigname = $("#campaign_name").val();
		var link ='&lt;img src="http://www.categorymanagement.com.ar/'
						+'images-nl/imagetrack2.php?name=#name#&mail=#e-mail#&news='+newsletter+'&campaign='
						+campaigname+'&company='+company+'" /&gt';
		$("#linktext").empty();				
		$("#linktext").html(link);
		$('#myModal').modal(options);
	});
</script>
      
      
      
      
      
<?php $this->load->view('/clickviewer/panelend');?>
 
