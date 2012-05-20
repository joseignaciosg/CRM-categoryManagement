<?php

class User extends CI_Controller {
	

	public function login($page = 'login')
	{
		if ( ! file_exists('application/views/user/'.$page.'.php')){
			show_404();
		}
		
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['user_username'] = $_POST["user_username"];
		$data['user_password'] = $_POST["user_password"];
		
// 		$data['todo'] = array('clean house', 'eat lunch', 'call mom');

		$this->load->view('templates/header', $data);
		$this->load->view('user/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
	
}

?>