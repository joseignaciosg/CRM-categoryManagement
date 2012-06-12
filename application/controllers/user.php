<?php

class User extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('clickservice_model');
		$this->load->model('userservice_model');
		$this->load->library('simplelogin');
	}


	public function login($page = 'login'){
		$data['title'] = ucfirst($page); // Capitalize the first letter


		$data['user_username'] =  $_POST["user_username"];
		$data['user_password'] =  $_POST["user_password"];

		if(!$this->simplelogin->login($this->input->post('user_username'), $this->input->post('user_password'))) {
			$data['errors'] = 'Nombre de Usuario o Contraseña Inválida';
		} else {
			$data['info'] = 'Bienvenido ' . $data['user_username'];
			$results = $this->userservice_model->get_user($data['user_username'],$data['user_password']);
			foreach($results->result_array() as $r ){
				$companyname = $r['nombre'];
				$company_id = $r['company_id'];
			}
			
			$newdata = array(
		                'username'  => $data['user_username'],
		                'password'  => $data['user_password'],	
		                'companyname' => $companyname,
		                'company_id' => $company_id,
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
		$this->simplelogin->logout();
		$this->session->sess_destroy();
		$data['title'] = "Home";
		$data['info'] = 'Se ha deslogueado correctamente';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
		$this->session->sess_destroy();
	}

	public function viewer($page = 'viewer'){
		$this->load->helper('url');
		redirect('/clickviewer/openings');
	}

  	public function panel($page = 'panel'){
  		if ( ! file_exists('application/views/clickviewer/'.$page.'.php')){
  			show_404();
  		}
  		$data['title'] = ucfirst($page);
  		$data['page'] = $page;
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/panel', $data);
  		$this->load->view('templates/footer', $data);
  	}
  	
  	public function changepassform($page ="changepassform"){
  		$data['title'] = ucfirst($page);
  		$data['page'] = $page;
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/changepass', $data);
  		$this->load->view('templates/footer', $data);
  		
  	}
	
  	public function changepass($page ="changepass"){
  		$username = $this->session->userdata('username');
  		$realoldpassword = $this->session->userdata('password');
  		$oldpassword = $this->input->post('old_pass');
  		$newpassword = $this->input->post('new_pass');
  		$newpasswordagain=  $this->input->post('new_pass2');
  		$company = $this->session->userdata('company_id');
  		
  		$data['page'] = $page;
  		$data['title'] = $page;
  		if ($newpassword != $newpasswordagain){
  			$data['errors'] = 'Las contraseñas no coinciden';
  		}else if($realoldpassword != $oldpassword ){
  			$data['errors'] = 'Las vieja contraseña es incorrecta';
  		}else {
  			$results = $this->userservice_model->change_password($company, $newpassword);
  			$data['info'] = 'Su contraseña ha sido cambiada exitosamente.';
  		}
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/changepass', $data);
  		$this->load->view('templates/footer', $data);
  	}
  	
  	public function seedata($page ="seedata"){
  		$username = $this->session->userdata('username');
  		$password = $this->session->userdata('password');
  		$data['results'] = $this->userservice_model->get_user($username, $password);
  		$data['title'] = ucfirst($page);
  		$data['page'] = $page;
  		$this->load->view('templates/header', $data);
  		$this->load->view('user/seedata', $data);
  		$this->load->view('templates/footer', $data);
  	
  	}
  	
}

?>