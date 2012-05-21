<?php $this->load->view('/clickviewer/panel');?>
<?php echo $this->table->generate($results); ?>
<?php echo $this->pagination->create_links(); ?>
<?php $this->load->view('/clickviewer/panelend');?>
