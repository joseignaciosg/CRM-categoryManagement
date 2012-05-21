<?php 

abstract class Click extends CI_Model {

	var $id; // id in database
    var $receiver; // user and mail in database
    var $date; // date in database
    var $newsletter; // newsletter in database
    var $campaign = '';
    var $user; // company in database
    var $message = ''; //message in database
    

    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}

?>