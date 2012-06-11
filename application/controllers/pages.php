<?php

class Pages extends MY_Controller {
	
// 	protected $before_filter = array(
// 	    'action' => 'redirect_if_not_logged_in',
// 	    'except' => array('home')
// 	);

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}
	
	
	
	public function home($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['user_username'] = null;
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
	
	public function about($page = 'about')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
	
		$data['title'] = ucfirst($page); // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	
	}
	
// 	protected function redirect_if_not_logged_in() {
		
// 		if(!$this->session->userdata('logged_in')){
// 			$data['errors'] = 'Debe estar logueado';
// 			$this->load->view('templates/header', $data);
// 			$this->load->view('pages/home', $data);
// 			$this->load->view('templates/footer', $data);
// 		}
// 	}
}

?>