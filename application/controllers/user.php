<?php

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
// 		$this->load->library('session');
	}
	

	public function login($page = 'login'){
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['user_username'] = $_POST["user_username"];
		$data['user_password'] = $_POST["user_password"];
		
		//TODO connection to DB
		if($data['user_username'] != 'jose' || $data['user_password'] != 'jose' ){
			if ($data['user_username'] != 'jose'){
				$data['errors'] = 'Nombre de Usuario Inválido';
			}
			if($data['user_password'] != 'jose'){
				$data['errors'] = 'Contraseña Inválida';
			} 
		}else{
			$data['info'] = 'Bienvenido ' . $data['user_username'];
			$newdata = array(
			                   'username'  => $data['user_username'],
			                   'password'  => $data['user_password'],
			                   'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);

	}
	
	public function logout($page = 'logout'){
		$this->session->set_userdata('logged_in', FALSE);
 		$this->session->sess_destroy();
		$data['info'] = 'Se ha deslogueado correctamente';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function viewer($page = 'viewer'){
		$this->load->helper('url');
		redirect('/clickviewer/openings');
	}
	
}

?>