<?php

class index extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function usuarios_index(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario');
		return $query->num_rows();

	}

	function usuarios_reg(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE estado= 1');
		return $query->num_rows();

	}

	function getts3(){
		$this->load->database();

		$query = $this->db->query('SELECT ts3 FROM info_factions');
		return $query;

	}
	function video_index(){
		$this->load->database();

		$query = $this->db->query('SELECT video_index FROM info_factions');
		return $query;

	}


}
?>