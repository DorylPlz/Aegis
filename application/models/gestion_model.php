<?php

class gestion_model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

	function new_userN(){
		$this->load->database();

        $query = $this->db->query("SELECT * FROM usuario WHERE estado = 0");
        return $query->num_rows();
	}


	function new_user(){
		$this->load->database();

        $query = $this->db->query("SELECT * FROM usuario where estado = 0");
        return $query;
	}

    function aceptar_new_user($id_usu,$usu_estado){
        $this->load->database();

        $query = $this->db->query("UPDATE `usuario` SET `estado` = '".$usu_estado."' WHERE `usuario`.`id_usu` = '".$id_usu."'");
        return $query;
    }
    
    public function sort_missions(){
        $this->load->database();

        $query = $this->db->query('SELECT Mis.fecha, Mis.tipo, Mis.nombre, Mis.id_mision,
            Usu.nick
            FROM mision Mis
            INNER JOIN usuario Usu ON Mis.id_zeus = Usu.id_usu
            ORDER BY id_mision DESC
            ');
        return $query;

    }
    public function asistencia(){
        $this->load->database();

        $query = $this->db->query('SELECT *
            FROM mision');
        return $query;

    }

    function peloton_1(){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM pelotones WHERE id_pel = 1");
        return $query;
    }
    
    function peloton_2(){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM pelotones WHERE id_pel = 2");
        return $query;
    }
    
    function peloton_3(){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM pelotones WHERE id_pel = 3");
        return $query;
    }

    function ingGaleria($galeria){
        $this->load->database();

        $this->db->insert('esp_taken',$ingresoEsp1);

    }

}


?>