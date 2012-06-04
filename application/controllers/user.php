<?php

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
 		$this->load->model('clickservice_model'); 
		// 		$this->load->library('session');
	}
	

	public function login($page = 'login'){
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['user_username'] = $_POST["user_username"];
		$data['user_password'] = $_POST["user_password"];
		
		//TODO connection to DB
		if($data['user_username'] != 'category' || $data['user_password'] != 'category' ){
			if ($data['user_username'] != 'category'){
				$data['errors'] = 'Nombre de Usuario Inválido';
			}
			if($data['user_password'] != 'category'){
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
	
	public function downloadAllClicks($page = 'downloadallclicks'){
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-type: application/force-download");
		header("Content-Disposition: attachment; filename=\"".basename("clicks.csv")."\";" );
		header("Content-Transfer-Encoding: binary");
		$fp = fopen('clicks.csv','w');
		$results = $this->clickservice_model->get_all_click_data($company_id);
		foreach($results as $row ){
			$nextline = $row->user . ',' . $row->mail . ',' . date("d/m/y",strtotime($row->date))
			. ',' . date("H:i:s",strtotime($row->date)) .',' . $row->name .',' . $row->campaign . "\r\n";
			fwrite($fp,$nextline);
		}
		fclose($fp);
		header("Content-Length: ".filesize("clicks.csv"));
		readfile("clicks.csv");
	}
}

?>