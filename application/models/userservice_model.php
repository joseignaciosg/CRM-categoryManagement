<?php

class UserService_model extends CI_Model{
	
	var $id;
	var $company_id;
	var $username;
	var $password;
	var $companyname;
	
	function __construct(){
		parent::__construct();
	}
	
	function get_user($username , $password){
		$query = "SELECT users.id as id, username, password, company_id, nombre 
					FROM users, companies
					WHERE company_id = companies.id 
					AND   username LIKE ?
					AND   password LIKE ?";
		return $this->db->query($query, array($username,$password));
	}
	
	function change_password($company, $newpassword){
		$query = "update users set password = ? where id = ?";
		return $this->db->query($query, array($newpassword,$company));
	}
	
}