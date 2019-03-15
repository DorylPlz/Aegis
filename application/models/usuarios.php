<?php

class usuarios extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getUser($nick = '')
    {
    	$this->load->database();
    	$result = $this->db->query("SELECT * FROM usuario WHERE nick = '" . $nick . "' LIMIT 1 ");

    	if($result->num_rows() > 0 ){
    		

            return $result->row();
            



    	}else{
    		return null;
    	}


    }

    public function getAllUserNumber()
    {
        $this->load->database();
        $result = $this->db->query("SELECT id_usu FROM usuario");

        if($result->num_rows() > 0 ){
            

            return $result;
            



        }else{
            return null;
        }


    }

    public function getAllUser()
    {
        $this->load->database();
        $result = $this->db->query("SELECT Usu.nick, Usu.id_usu, Usu.steam,
                                        Pel.pel_name,
                                        Rango.abrev
            FROM usuario Usu
            INNER JOIN pelotones Pel ON Pel.id_pel = Usu.id_pel
            INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango
            WHERE Usu.estado = 1
            ORDER BY Usu.id_rango ASC");

        if($result->num_rows() > 0 ){
            

            return $result;
            



        }else{
            return null;
        }


    }

    public function getDataUser($id)
    {
        $this->load->database();
        $id_usu = $this->db->query("SELECT id_usu FROM usuario WHERE id_usu = '" . $id . "' LIMIT 1 ");

        if($id_usu->num_rows() > 0 ){

            $result = $this->db->query("SELECT Usu.nick, Usu.steam, Usu.email, Usu.img_perfil, Usu.zeus, Usu.fecha, Usu.id_rango, Usu.id_pel, Usu.id_usu, Usu.estado, Usu.usu_desc,
                Rango.rango_name, Rango.abrev,
                Pel.pel_name,
                Com.com_name,
                Puntos.nousados, Puntos.usados
                FROM usuario Usu
                INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango 
                INNER JOIN pelotones Pel ON Usu.id_pel = Pel.id_pel
                INNER JOIN company Com ON Pel.id_company = Com.id_company
                INNER JOIN puntos Puntos ON Usu.id_usu = Puntos.id_usu
                WHERE Usu.id_usu = '". $id ."' LIMIT 1");
            
  
            if($result->num_rows() > 0 ){
                return $result;
            }



        }else{
            return null;
        }


    }

    public function getEspUser($id = ''){
        $this->load->database();

        $result = $this->db->query("SELECT Esp.esp_name
                FROM esp_list Esp
                INNER JOIN esp_taken Taken ON Esp.id_especialidad = Taken.id_especialidad
                WHERE Taken.id_usu = '". $id ."'");


            return $result;




        
        

    }

	function newUser(){
		$this->load->database();

		$query = $this->db->query('SELECT nick FROM usuario where id_rango=0');
		return $query->result();

	}

    function getId($nick){
        $this->load->database();
        $query = $this->db->query("SELECT id_usu, zeus  FROM usuario where nick ='". $nick ."' LIMIT 1");

        return $query;

    }
    function getZeus($nick){
        $this->load->database();

        $query = $this->db->query("SELECT zeus FROM usuario where nick ='". $nick ."'");
        return $query->result();

    }

    function get1Pel(){
        $this->load->database();

        $query = $this->db->query('SELECT Usu.nick, Usu.id_usu, Usu.fecha, Usu.estado,
        Rango.abrev, Rango.rango_name
        FROM usuario Usu
        INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango
        where id_pel=1 && estado=1 OR estado=2 OR estado=3 
        ORDER BY Usu.id_rango ASC');
        return $query;

    }
    function get2Pel(){
        $this->load->database();

        $query = $this->db->query('SELECT Usu.nick, Usu.id_usu, Usu.fecha,
        Rango.abrev, Rango.rango_name
        FROM usuario Usu
        INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango
        where id_pel=2
        ORDER BY Usu.id_rango ASC');
        return $query;

    }
    function get3Pel(){
        $this->load->database();

        $query = $this->db->query('SELECT Usu.nick, Usu.id_usu, Usu.fecha,
        Rango.abrev, Rango.rango_name
        FROM usuario Usu
        INNER JOIN rango Rango ON Usu.id_rango = Rango.id_rango
        where id_pel=3
        ORDER BY Usu.id_rango ASC');
        return $query;

    }
    function cantidadAsistencia($id){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM asistencia WHERE id_usu = '" . $id . "'");
        return $query->num_rows();

    }

    function nUserMision($id){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM asistencia WHERE id_usu = '" . $id . "' && estado = 1");
        return $query->num_rows();

    }
    function noAsistidasUser($id){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM asistencia WHERE id_usu = '" . $id . "' && estado = 0");
        return $query->num_rows();

    }

    function getRangos(){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM rango");
        return $query;

    }

//Puntos Profile
    function getPTotales($id){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'");
        if($query->result() != null){
            return $query;
        }else{
            $query2 = $this->db->query("INSERT INTO `puntos`(id_usu,nousados,total,usados) VALUES ('".$id."',0,0,0) ");
            $puntos = $this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'");
            return $puntos;
        }

    }

//Ingreso puntos Entrenamiento
    function regPuntosEntrenamiento($id){
        $this->load->database();
        $consulta = $this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'");
        $puntos = 0.5;

        if($consulta->result() != null){
            $total = array();
            foreach($this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'")->result() as $row){
                $total = $row->total;
                $noUsados = $row->nousados;
            }

            $totalQuery = $total + $puntos;
            $nousadosQuery = $noUsados + $puntos;
            
            $query = $this->db->query("UPDATE `puntos` SET nousados = ".$nousadosQuery.", total = ".$totalQuery." WHERE id_usu = " . $id . "");
            return $query;


        }else{

            $query = $this->db->query("INSERT INTO `puntos`(id_usu,nousados,total,usados) VALUES ('".$id."','".$puntos."','".$puntos."','0') ");
            return $query;
        }
    }

//Ingreso puntos Semi
    function regPuntosSemi($id){
        $this->load->database();
        $consulta = $this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'");
        $puntos = 0.5;

        if($consulta->result() != null){
            $total = array();
            foreach($this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'")->result() as $row){
                $total = $row->total;
                $noUsados = $row->nousados;
            }

            $totalQuery = $total + $puntos;
            $nousadosQuery = $noUsados + $puntos;
            
            $query = $this->db->query("UPDATE `puntos` SET nousados = ".$nousadosQuery.", total = ".$totalQuery." WHERE id_usu = " . $id . "");
            return $query;


        }else{

            $query = $this->db->query("INSERT INTO `puntos`(id_usu,nousados,total,usados) VALUES ('".$id."','".$puntos."','".$puntos."','0') ");
            return $query;
        }
    }


//Ingreso puntos Oficial
    function regPuntosOf($id){
        $this->load->database();
        $consulta = $this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'");
        $puntos = 1;

        if($consulta->result() != null){
            $total = array();
            foreach($this->db->query("SELECT * FROM puntos WHERE id_usu = '" . $id . "'")->result() as $row){
                $total = $row->total;
                $noUsados = $row->nousados;
            }

            $totalQuery = $total + $puntos;
            $nousadosQuery = $noUsados + $puntos;
            
            $query = $this->db->query("UPDATE `puntos` SET nousados = ".$nousadosQuery.", total = ".$totalQuery." WHERE id_usu = " . $id . "");
            return $query;


        }else{

            $query = $this->db->query("INSERT INTO `puntos`(id_usu,nousados,total,usados) VALUES ('".$id."','".$puntos."','".$puntos."','0') ");
            return $query;
        }
    }

    function getPelotones(){
        $this->load->database();

        $query = $this->db->query("SELECT * FROM pelotones");
        return $query;
    }


//Especialidades
    function getEspecialidadesInfanteria($id){
        $this->load->database();

        $query = $this->db->query("SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 1");
        return $query;

    }
    
    function getEspecialidadesSoporte($id){
        $this->load->database();

        $query = $this->db->query('SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = "'.$id.'" && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 2');
        return $query;

    }

    function getEspecialidadesFFEE($id){
        $this->load->database();

        $query = $this->db->query('SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = "'.$id.'" && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 3');
        return $query;

    }

    function getEspInfanNum($id){
        $this->load->database();

        $query = $this->db->query("SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 1");
        return $query->num_rows();

    }
    function getEspSopNum($id){
        $this->load->database();

        $query = $this->db->query("SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 2");
        return $query->num_rows();

    }

    function getEspFFEENum($id){
        $this->load->database();

        $query = $this->db->query("SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
                                    )
                                    && campo = 3");
        return $query->num_rows();

    }

    function ingEspInfan($ingresoEsp1){
        $this->load->database();

        $this->db->insert('esp_taken',$ingresoEsp1);

    }

    function ingEspSop($ingresoEsp2){
        $this->load->database();

        $this->db->insert('esp_taken',$ingresoEsp2);

    }

    function ingEspFFEE($ingresoEsp3){
        $this->load->database();

        $this->db->insert('esp_taken',$ingresoEsp3);

    }

}


?>