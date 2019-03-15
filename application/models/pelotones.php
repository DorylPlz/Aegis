<?php

class pelotones extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
//Nombres
	function getCoronel(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu FROM usuario where id_rango=0 && estado=1');
		return $query;

	}
	function getGeneral(){
		$this->load->database();

		$gral = $this->db->query('SELECT nick, fecha, id_usu FROM usuario where id_rango=1 && estado=1');
		return $gral;

	}




//1ºPeloton
	function getCoronel_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=0 AND id_pel=1 && estado=1');
		return $query;

	}


	function getTtecrl_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=2 AND id_pel=1 && estado=1');
		return $query;

	}

	function getmayor_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=3 AND id_pel=1 && estado=1');
		return $query;

	}

	function getcapitan_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=4 AND id_pel=1 && estado=1');
		return $query;

	}

	function getteniente_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=5 AND id_pel=1 && estado=1');
		return $query;

	}

	function getsubteniente_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=6 AND id_pel=1 && estado=1');
		return $query;

	}

	function getalferez_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=7 AND id_pel=1 && estado=1');
		return $query;

	}

	function getsuboficialmayor_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=8 AND id_pel=1 && estado=1');
		return $query;

	}

	function getsuboficial_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=9 AND id_pel=1 && estado=1');
		return $query;

	}

	function getsargento1_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=10 AND id_pel=1 && estado=1');
		return $query;

	}

	function getsargento2_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=11 AND id_pel=1 && estado=1');
		return $query;

	}

	function getcabo1_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=12 AND id_pel=1 && estado=1');
		return $query;

	}

	function getcabo2_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=13 AND id_pel=1 && estado=1');
		return $query;

	}

	function getcabo_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=14 AND id_pel=1 && estado=1');
		return $query;

	}

	function gettropa_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=15 AND id_pel=1 && estado=1');
		return $query;

	}

	function getconscripto_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=16 AND id_pel=1 && estado=1');
		return $query;

	}

	function getcadete_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=18 AND id_pel=1 && estado=1');
		return $query;

	}


// End_1ºPeloton


//2ºPeloton

	function getcrlavb_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=19 AND id_pel=2 && estado=1');
		return $query;

	}

	function getcomgru_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=20 AND id_pel=2 && estado=1');
		return $query;

	}

	function getcomesc_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=21 AND id_pel=2 && estado=1');
		return $query;

	}

	function getcapban_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=22 AND id_pel=2 && estado=1');
		return $query;

	}

	function getmtteB_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=23 AND id_pel=2 && estado=1');
		return $query;

	}

	function getalferezB_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=24 AND id_pel=2 && estado=1');
		return $query;

	}

	function getsubalferezB_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=25 AND id_pel=2 && estado=1');
		return $query;

	}

	function getcadeteB_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=26 AND id_pel=2 && estado=1');
		return $query;

	}

//End_2ºpeloton

//3ºpeloton
	function getsgto2C_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=11 AND id_pel=3 && estado=1');
		return $query;

	}

	function getcabo1C_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=12 AND id_pel=3 && estado=1');
		return $query;

	}

	function getcabo2C_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=13 AND id_pel=3 && estado=1');
		return $query;

	}

	function getcaboC_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=14 AND id_pel=3 && estado=1');
		return $query;

	}

	function getsltpC_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=15 AND id_pel=3 && estado=1');
		return $query;

	}

	function getslcC_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=16 AND id_pel=3 && estado=1');
		return $query;

	}

	function getrcltC_name(){
		$this->load->database();

		$query = $this->db->query('SELECT nick, fecha, id_usu  FROM usuario where id_rango=18 AND id_pel=3 AND estado=1');
		return $query;

	}

//End_3ºpeloton




































//1ºPeloton
	function get1Crl(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=0 && estado=1');
		return $query->num_rows();

	}


	function get1TteCrl(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=2 && estado=1');
		return $query->num_rows();

	}

	function get1Mayor(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=3 && estado=1');
		return $query->num_rows();

	}

	function get1Cpt(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=4 && estado=1');
		return $query->num_rows();

	}


	function get1Tte(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=5 && estado=1');
		return $query->num_rows();

	}

	function get1SubTte(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=6 && estado=1');
		return $query->num_rows();

	}

	function get1Alferez(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=7 && estado=1');
		return $query->num_rows();

	}

	function get1SubMayor(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=8 && estado=1');
		return $query->num_rows();

	}

	function get1SubOf(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=9 && estado=1');
		return $query->num_rows();

	}

	function get1Sgto1(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=10 && estado=1');
		return $query->num_rows();

	}

	function get1Sgto2(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=11 && estado=1');
		return $query->num_rows();

	}

	function get1Cbo1(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=12 && estado=1');
		return $query->num_rows();

	}

	function get1Cbo2(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=13 && estado=1');
		return $query->num_rows();

	}

	function get1Cbo(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=14 && estado=1');
		return $query->num_rows();

	}

	function get1Sltp(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=15 && estado=1');
		return $query->num_rows();

	}

	function get1Slc(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=16 && estado=1');
		return $query->num_rows();

	}

	function get1Cdt(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=1 AND id_rango=18 && estado=1');
		return $query->num_rows();

	}



//2ºPeloton
	function get2Cmdt(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=19 && estado=1');
		return $query->num_rows();

	}

	function get2ComGrupo(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=20 && estado=1');
		return $query->num_rows();

	}

	function get2ComEsc(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=21 && estado=1');
		return $query->num_rows();

	}

	function get2CptBan(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=22 && estado=1');
		return $query->num_rows();

	}

	function get2Tte(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=23 && estado=1');
		return $query->num_rows();

	}

	function get2Alferez(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=24 && estado=1');
		return $query->num_rows();

	}
		function get2SubAlferez(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=25 && estado=1');
		return $query->num_rows();

	}

	function get2Cdt(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=2 AND id_rango=26 && estado=1');
		return $query->num_rows();

	}






//3ºPeloton
	function get3Sgto2(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=11 && estado=1');
		return $query->num_rows();

	}

	function get3Cbo1(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=12 && estado=1');
		return $query->num_rows();

	}

	function get3Cbo2(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=13 && estado=1');
		return $query->num_rows();

	}

	function get3Cbo(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=14 && estado=1');
		return $query->num_rows();

	}

	function get3Sltp(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=15 && estado=1');
		return $query->num_rows();

	}

	function get3Slc(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=16 && estado=1');
		return $query->num_rows();

	}

	function get3Rclt(){
		$this->load->database();

		$query = $this->db->query('SELECT * FROM usuario WHERE id_pel=3 AND id_rango=18 AND estado=1');
		return $query->num_rows();

	}







	//Nombre y desc de los pelotones
	function getPel1(){
		$this->load->database();

		$query = $this->db->query('SELECT pel_name, pel_desc FROM pelotones where id_pel=1');
		return $query;


	}

	function getPel2(){
		$this->load->database();

		$query = $this->db->query('SELECT pel_name, pel_desc FROM pelotones where id_pel=2');
		return $query;


	}

	function getPel3(){
		$this->load->database();

		$query = $this->db->query('SELECT pel_name, pel_desc FROM pelotones where id_pel=3');
		return $query;


	}









}


?>