<?php

class Clickviewer extends MY_Controller {
	
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
		$this->load->view('clickviewer/panel', $data);
		$this->load->view('templates/footer', $data);

	}
	
	public function openings($page = 'openings'){
		$data['title'] = ucfirst($page);
		$data['page'] = $page;

		//for pagination
		$aux = $this->clickservice_model->get_all_openings();
		$data['registers_count'] = $aux->num_rows();
		$this->load->library('pagination');
		$data['results'] = $this->clickservice_model->get_openings($this->uri->segment(3,0),20);
		$config['total_rows'] = $data['registers_count'];
		$config['base_url'] = base_url().'index.php/clickviewer/openings/';
		$this->pagination->initialize($config);
		
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('Nombre', 'E-Mail', 'Fecha','Newsletter','Campaña');
		$tmpl = array (
		                    'table_open'          => '<table class="table table-striped">',
		                    'heading_row_start'   => '<thead><tr>',
		                    'heading_row_end'     => '</tr></thead>',
		                    'heading_cell_start'  => '<th>',
		                    'heading_cell_end'    => '</th>',
		                    'row_start'           => '<tr>',
		                    'row_end'             => '</tr>',
		                    'cell_start'          => '<td>',
		                    'cell_end'            => '</td>',
		                    'row_alt_start'       => '<tbody><tr>',
		                    'row_alt_end'         => '</tr></tbody>',
		                    'cell_alt_start'      => '<td>',
		                    'cell_alt_end'        => '</td>',
		                    'table_close'         => '</table>'
		);
		
		$this->table->set_template($tmpl);
		
		$this->load->view('templates/header', $data);
		$this->load->view('clickviewer/openings', $data);
		$this->load->view('templates/footer',$data);
		
	}
	
	public function clicks($page = 'clicks'){
		$data['title'] = ucfirst($page);
		$data['page'] = $page;
		//for pagination
		$aux = $this->clickservice_model->get_all_link_clicks();
		$data['registers_count'] = $aux->num_rows();
		$this->load->library('pagination');
		$data['query'] = $this->clickservice_model->get_link_clicks($this->uri->segment(3,0),20);
		$config['total_rows'] = $data['registers_count'];
		$config['base_url'] = base_url().'index.php/clickviewer/clicks/';
		$this->pagination->initialize($config);
		
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('Nombre', 'E-Mail', 'Fecha','Newsletter','Campaña','Enlace');
		$tmpl = array (
				                    'table_open'          => '<table class="table">',
				                    'heading_row_start'   => '<thead><tr>',
				                    'heading_row_end'     => '</tr></thead>',
				                    'heading_cell_start'  => '<th>',
				                    'heading_cell_end'    => '</th>',
				                    'row_start'           => '<tr>',
				                    'row_end'             => '</tr>',
				                    'cell_start'          => '<td>',
				                    'cell_end'            => '</td>',
				                    'row_alt_start'       => '<tbody><tr>',
				                    'row_alt_end'         => '</tr></tbody>',
				                    'cell_alt_start'      => '<td>',
				                    'cell_alt_end'        => '</td>',
				                    'table_close'         => '</table>'
		);
		
		$this->table->set_template($tmpl);
		$this->load->view('templates/header', $data);
		$this->load->view('clickviewer/clicks', $data);
		$this->load->view('templates/footer', $data);
		
	}
	
	public function tracklink($page = 'tracklink'){
		if ( ! file_exists('application/views/clickviewer/'.$page.'.php')){
			show_404();
		}
		$company = $this->session->userdata('company_id');
		$data['title'] = ucfirst($page);
		$data['company'] = $company;
		$data['page'] = $page;
		$data['results'] = $this->newsletterservice_model->get_news_form_company($company); //here should be company id
		$this->load->view('templates/header', $data);
		$this->load->view('clickviewer/tracklink', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function newslettergraph($page = 'newslettergraph'){
		if ( ! file_exists('application/views/clickviewer/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);
		$data['page'] = $page;
		$company = $this->session->userdata('company_id');
		$data['results'] = $this->clickservice_model->get_quant_clicks_for_each_newsletter($company);
		$this->load->view('templates/header', $data);
		$this->load->view('clickviewer/newslettergraph', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function campaigngraph($page = 'campaigngraph'){
		if ( ! file_exists('application/views/clickviewer/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);
		$data['page'] = $page;
		$company = $this->session->userdata('company_id');
		$data['results'] = $this->clickservice_model->get_quant_clicks_for_each_campaign($company);
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('clickviewer/campaigngraph', $data);
		$this->load->view('templates/footer', $data);
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
		$company = $this->session->userdata('company_id');
		$results = $this->clickservice_model->get_all_click_data($company);
		foreach($results->result_array() as $row ){
			$nextline = $row['user'] . ',' . $row['mail'] . ',' . date("d/m/y",strtotime($row['date']))
			. ',' . date("H:i:s",strtotime($row['date'])) .',' . $row['name'] .',' . $row['campaign'] . " \r\n";
			fwrite($fp,$nextline);
		}
		fclose($fp);
		header("Content-Length: ".filesize("clicks.csv"));
		readfile("clicks.csv");
	}
	
	public function downloadOpenings($page = 'downloadopenings'){
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-type: application/force-download");
		header("Content-Disposition: attachment; filename=\"".basename("clicks.csv")."\";" );
		header("Content-Transfer-Encoding: binary");
		$fp = fopen('clicks.csv','w');
		$company = $this->session->userdata('company_id');
		$results = $this->clickservice_model->get_all_type_click_data($company,1);
		foreach($results->result_array() as $row ){
			$nextline = $row['user'] . ',' . $row['mail'] . ',' . date("d/m/y",strtotime($row['date']))
			. ',' . date("H:i:s",strtotime($row['date'])) .',' . $row['name'] .',' . $row['campaign'] . " \r\n";
			fwrite($fp,$nextline);
		}
		fclose($fp);
		header("Content-Length: ".filesize("clicks.csv"));
		readfile("clicks.csv");
	}
	
	public function downloadLinkClicks($page = 'downloadlinkclicks'){
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-type: application/force-download");
		header("Content-Disposition: attachment; filename=\"".basename("clicks.csv")."\";" );
		header("Content-Transfer-Encoding: binary");
		$fp = fopen('clicks.csv','w');
		$company = $this->session->userdata('company_id');
		$results = $this->clickservice_model->get_all_type_click_data($company,2);
		foreach($results->result_array() as $row ){
			$nextline = $row['user'] . ',' . $row['mail'] . ',' . date("d/m/y",strtotime($row['date']))
			. ',' . date("H:i:s",strtotime($row['date'])) .',' . $row['name'] .',' . $row['campaign'] . " \r\n";
			fwrite($fp,$nextline);
		}
		fclose($fp);
		header("Content-Length: ".filesize("clicks.csv"));
		readfile("clicks.csv");
	}
	
}

?>