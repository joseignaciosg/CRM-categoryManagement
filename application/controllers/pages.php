<?php

class Pages extends CI_Controller {
	

	public function home($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['user_username'] = null;
// 		$data['todo'] = array('clean house', 'eat lunch', 'call mom');
		
		
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
}

?>