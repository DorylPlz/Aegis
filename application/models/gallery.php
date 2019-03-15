<?php

class gallery extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function getGallery(){
		$this->load->database();

		$query = $this->db->query("SELECT * FROM galeria");

		return $query;
	}
	function getGalleryFirst(){
		$this->load->database();

		$query = $this->db->query("SELECT * FROM galeria LIMIT 1");

		return $query;
	}



}


?>