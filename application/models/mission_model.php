<?php

class mission_model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }


	public function getZeus(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, id_usu  FROM usuario where zeus=1');

		return $query;
	}

    function nasistMision($id_mision){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM asistencia WHERE id_mision = '" . $id_mision . "' && estado = 1");
        return $query->num_rows();

    }
    function noAsistentesMision($id_mision){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM asistencia WHERE id_mision = '" . $id_mision . "'");
        return $query->num_rows();

    }



	public function new_mission($registro_mission){
		$this->load->database();

		$this->db->insert('mision',$registro_mission);
	}

	public function sort_3_missions(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM mision ORDER BY id_mision DESC LIMIT 3');
		return $query;

	}

    public function sort_3_missions_profile($id){
        $this->load->database();

        $query = $this->db->query("SELECT Mis.tipo, Mis.nombre, Mis.fecha, Mis.img_mision, Mis.id_mision
                FROM mision Mis
                INNER JOIN asistencia Asist ON Asist.id_mision = Mis.id_mision
                WHERE Asist.id_usu =  '" . $id . "' && Asist.estado = 1
                ORDER BY Mis.id_mision desc LIMIT 3");
        return $query;

    }

    public function sort_asist($id){
        $this->load->database();

        $query = $this->db->query("SELECT Mis.tipo, Mis.nombre, Mis.fecha, Mis.id_mision
                FROM mision Mis
                INNER JOIN asistencia Asist ON Asist.id_mision = Mis.id_mision
                WHERE Asist.id_usu =  '" . $id . "' && Asist.estado = '1' ");
        return $query;

    }



	public function getDataMision($id_mision){
		$this->load->database();

		$query = $this->db->query("SELECT * FROM mision WHERE id_mision = '" . $id_mision . "' ");

		if($query->num_rows() > 0 ){

            $result = $this->db->query("SELECT Mis.tipo, Mis.brief, Mis.fecha, Mis.img_mision, Mis.obj, Mis.mapa, Mis.nombre, Mis.id_mision,
                Usu.nick
                FROM mision Mis
                INNER JOIN usuario Usu ON Mis.id_zeus = Usu.id_usu 
                WHERE id_mision = '". $id_mision ."' LIMIT 1");
            
  
            if($result->num_rows() > 0 ){
                return $result;
            }



        }else{
            return null;
        }



		return $query;

	}

	public function getAsistMision($id_mision){
        $this->load->database();

        $result = $this->db->query("SELECT Usu.nick, Usu.id_rango, Usu.id_pel, Usu.id_usu,
                Rango.rango_name, Rango.abrev,
                Asist.id_mision,
                Pel.pel_name
                FROM asistencia Asist
                INNER JOIN usuario Usu ON Asist.id_usu = Usu.id_usu
                INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango
                INNER JOIN pelotones Pel ON Usu.id_pel = Pel.id_pel
                WHERE Asist.id_mision = '". $id_mision ."' && Asist.estado = '1'
                ORDER BY Usu.id_rango");
        $error = "*";

            if($result->num_rows() > 0 ){
                return $result;
            }else{
                return null;
            }

	}

    public function ingreso_asistencia($data){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM asistencia WHERE '".$data."'");
        if($query->num_rows() == 0 ){
             $this->db->insert_batch('asistencia', $data);
        }else{
            echo "Asistencia ya fue ingresada";
        }

    }


}


?>