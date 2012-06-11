<?php

class Auditor extends MY_Controller {
	
	//extract this from a configuration file
	var $company_id =1;
	
	function __construct(){
		parent::__construct();
 		$this->load->model('clickservice_model'); 
 		$this->load->model('newsletterservice_model');
 		$this->load->database();
 		$this->load->helper(array('url'));
 		$this->load->library('table');
		
	}
	
	
	public function front($page = 'front'){
		if ( ! file_exists('application/views/clickviewer/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page); 
		$data['page'] = $page;
		$this->load->view('templates/header', $data);
		$this->load->view('auditor/help', $data);
		$this->load->view('templates/footer', $data);

	}
	
	public function executeauditory($page = 'executeauditory'){
		
	}
	
	public function activelist($page = 'activelist'){
	}
	
	public function smtpserverreport($page = 'smtpserverreport'){
		
	}
	
	public function badloadedinsendsystem($page = 'badloadedinsendsystem'){
		
	}

	public function hardbounceslastsending($page = 'hardbounceslastsending'){
		
	}
	
	public function softbounceslastsending($page = 'softbounceslastsending'){
				
	}
	
	public function allbounceslastsending($page = 'allbounceslastsending'){
		
	}

}



?>