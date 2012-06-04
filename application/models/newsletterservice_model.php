<?php

class NewsletterService_model extends CI_Model{
	
	var $newsletter_id;
	var $name;
	var $company_id;
	
	function __construct(){
		parent::__construct();
	}
	
	function get_news_form_company($company_id){
		$sqltxt = "SELECT newsletter_id, name FROM newsletters 
					WHERE company = ?";
		return $this->db->query($sqltxt, array($company_id));
	}
	
	
}