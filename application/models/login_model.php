<?php

class login_model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function new_user($registro){
		$this->load->database();

		$this->db->insert('usuario',$registro);
	}



}


?>