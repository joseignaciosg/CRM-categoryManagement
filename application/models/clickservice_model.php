<?php

class Clickservice_model extends CI_Model {

	var $id; // id in database
    var $receiver; // user and mail in database
    var $date; // date in database
    var $newsletter; // newsletter in database
    var $campaign = '';
    var $user; // company in database
    var $message = ''; //message in database
    

    function __construct(){
        parent::__construct();
    }
    
    function get_click_entries($company, $type, $page, $jump){
    	$sql ="SELECT user, mail, DATE, name, campaign, companies.nombre, image_click.id, message
    						FROM image_click, newsletters, companies
    						WHERE image_click.newsletter = newsletters.newsletter_id
    						AND image_click.company = companies.id
    						AND companies.id = ? 
    						AND image_click.type = ?
    						ORDER BY DATE DESC LIMIT ? , ?";
    	$this->db->query($sql, array($company, $type, $page, $jump));
    	
    	$ans = $query->result();
    	$fila = mysql_fetch_array($ans);
    	while ( $fila = mysql_fetch_array($ans) ){
    		$data[$i][0] = $fila[0]; //names
    		$data[$i][1] = $fila[1]; //mails
    		$data[$i][2] = strtotime($fila[2]);/*date - converting from mysql to php time*/
    		$data[$i][3] = $fila[3]; //newsletters
    		$data[$i][4] = $fila[4]; // campaigns
    		$data[$i][5] = $fila[5]; //companies
    		$data[$i][6] = $fila[7]; //messages
    		$data[$i][7] = $fila[6]; // ids
    		$i++;
    	}
    	return data;
    }
    
    
    function get_clicks( $offset, $limit){
   		return $this->db->get('image_click',  $limit, $offset);
	}
	
	function get_openings( $offset, $limit){
		$company = $this->session->userdata('company_id');
		$sqltxt = "SELECT user, mail, DATE, name, campaign
									FROM image_click, newsletters, companies
									WHERE image_click.newsletter = newsletters.newsletter_id
									AND image_click.company = companies.id
									AND companies.id = ? 
									AND image_click.type = ?
									ORDER BY DATE DESC LIMIT ? , ?";
		return $this->db->query($sqltxt, array($company,1,intval($offset),$limit));
	}
	
	function get_all_openings(){
		$company = $this->session->userdata('company_id');
		return $this->db->get_where('image_click', array('type' => 1, 'company' =>$company));
	}
	
	function get_link_clicks( $offset, $limit){
		$company = $this->session->userdata('company_id');
		$sqltxt = "SELECT user, mail, DATE, name, campaign, message
							FROM image_click, newsletters, companies
							WHERE image_click.newsletter = newsletters.newsletter_id
							AND image_click.company = companies.id
							AND companies.id = ? 
							AND image_click.type = ?
							ORDER BY DATE DESC LIMIT ? , ?";
		return $this->db->query($sqltxt, array($company,2,intval($offset),$limit));
	}
	
	function get_all_link_clicks(){
		$company = $this->session->userdata('company_id');
		return $this->db->get_where('image_click', array('type' => 2, 'company' =>$company));
	}
	
	function get_quant_clicks_for_each_newsletter( $companyid){
		$query ="SELECT newsletters.name as name, COUNT(image_click.user) as count
									FROM image_click, newsletters 
									WHERE newsletter = newsletter_id 
									AND image_click.company = ? 
									GROUP BY newsletters.name";
		return $this->db->query($query, array($companyid));
	}
	
	function get_quant_clicks_for_each_campaign( $companyid){
		$query ="SELECT campaign as name, COUNT(user) as count
					FROM  image_click
					WHERE company = ?
					GROUP BY campaign";
		return $this->db->query($query, array($companyid));
	}

	function get_all_click_data($companyid){
		$query = "SELECT user, mail, DATE as date, name, campaign, companies.nombre as companyname
									FROM image_click, newsletters, companies
									WHERE image_click.newsletter = newsletters.newsletter_id
									AND image_click.company = companies.id
									AND companies.id = ? 
									ORDER BY DATE DESC";
		return $this->db->query($query, array($companyid));
	}
	
	function get_all_type_click_data($companyid, $clicktype){
		$query = "SELECT user, mail, DATE as date, name, campaign, companies.nombre as companyname
										FROM image_click, newsletters, companies
										WHERE image_click.newsletter = newsletters.newsletter_id
										AND image_click.company = companies.id
										AND companies.id = ? 
										AND type = ?
										ORDER BY DATE DESC";
		return $this->db->query($query, array($companyid, $clicktype));
	}
	
}

?>