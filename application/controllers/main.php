<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	

	public function index()
	{
		$this->load->model('mission_model');


		$data['last_missions'] = $this->mission_model->sort_3_missions();
		$data['nusuarios'] = $this->index->usuarios_index();
		$data['ts3'] = $this->index->getts3();
		$data['video'] = $this->index->video_index();
		$this->load->view('header1');
		$this->load->view('index', $data);
		$this->load->view('footer',$data);
	}

	public function prueba()
	{
		$nick = $this->input->get('nombre');
			$this->load->model('usuarios');
			$infoUser = $this->usuarios->getDataUser($nick);
		$this->load->view('pruebassql');
	}


	public function nosotros()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('nosotros');
		$this->load->view('footer',$data);
	}

	public function codigos()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('codigos');
		$this->load->view('footer',$data);
	}

	public function sanciones()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('sanciones');
		$this->load->view('footer',$data);
	}

	public function ts3()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('ts3');
		$this->load->view('footer',$data);
	}

	public function inasistencias()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('inasistencias');
		$this->load->view('footer',$data);
	}

	public function especialidades()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('especialidades');
		$this->load->view('footer',$data);
	}

	public function asistencia()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('asistencia');
		$this->load->view('footer',$data);
	}

	public function pelotones()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->model("pelotones");


		//Get Nombres Usuarios
		$data['Gral'] = $this->pelotones->getGeneral();
		//1ºPeloton
			$data['getCrl'] = $this->pelotones->getCoronel_name();
			$data['getTtecrl'] = $this->pelotones->getTtecrl_name();
			$data['getMayor'] = $this->pelotones->getmayor_name();
			$data['getcapitan'] = $this->pelotones->getcapitan_name();
			$data['getteniente'] = $this->pelotones->getteniente_name();
			$data['getsubteniente'] = $this->pelotones->getsubteniente_name();
			$data['getalferezA'] = $this->pelotones->getalferez_name();
			$data['getsubofmayor'] = $this->pelotones->getsuboficialmayor_name();
			$data['getsubof'] = $this->pelotones->getsuboficial_name();
			$data['getsgto1A'] = $this->pelotones->getsargento1_name();
			$data['getsgto2A'] = $this->pelotones->getsargento2_name();
			$data['getcabo1A'] = $this->pelotones->getcabo1_name();
			$data['getcabo2A'] = $this->pelotones->getcabo2_name();
			$data['getcaboA'] = $this->pelotones->getcabo_name();
			$data['getsltpA'] = $this->pelotones->gettropa_name();
			$data['getslcA'] = $this->pelotones->getconscripto_name();
			$data['getcadeteA'] = $this->pelotones->getcadete_name();
		//1ºpeloton

		//2ºpeloton
			$data['getcrlavB'] = $this->pelotones->getcrlavb_name();
			$data['getcomgruB'] = $this->pelotones->getcomgru_name();
			$data['getcomescB'] = $this->pelotones->getcomesc_name();
			$data['getcapbanB'] = $this->pelotones->getcapban_name();
			$data['gettteB'] = $this->pelotones->getmtteB_name();
			$data['getalferezB'] = $this->pelotones->getalferezB_name();
			$data['getsubalferezB'] = $this->pelotones->getsubalferezB_name();
			$data['getcadeteB'] = $this->pelotones->getcadeteB_name();
		//2ºpeloton

		//3ºpeloton
			$data['getsgto2C'] = $this->pelotones->getsgto2C_name();
			$data['getcabo1C'] = $this->pelotones->getcabo1C_name();
			$data['getcabo2C'] = $this->pelotones->getcabo2C_name();
			$data['getcaboC'] = $this->pelotones->getcaboC_name();
			$data['getsltpC'] = $this->pelotones->getsltpC_name();
			$data['getslcC'] = $this->pelotones->getslcC_name();
			$data['getrcltC'] = $this->pelotones->getrcltC_name();
		//3ºpeloton


		//cantidades   

		$data['CrlA'] = $this->pelotones->get1Crl();
		$data['TteCrlA'] = $this->pelotones->get1TteCrl();
		$data['MayorA'] = $this->pelotones->get1Mayor();
		$data['CptA'] = $this->pelotones->get1Cpt();
		$data['TteA'] = $this->pelotones->get1Tte();
		$data['SubTteA'] = $this->pelotones->get1SubTte();
		$data['AlferezA'] = $this->pelotones->get1Alferez();
		$data['SubMayorA'] = $this->pelotones->get1SubMayor();
		$data['SubOfA'] = $this->pelotones->get1SubOf();
		$data['Sgto1A'] = $this->pelotones->get1Sgto1();
		$data['Sgto2A'] = $this->pelotones->get1Sgto2();
		$data['Cbo1A'] = $this->pelotones->get1Cbo1();
		$data['Cbo2A'] = $this->pelotones->get1Cbo2();
		$data['CboA'] = $this->pelotones->get1Cbo();
		$data['SltpA'] = $this->pelotones->get1Sltp();
		$data['SlcA'] = $this->pelotones->get1Slc();
		$data['CdtA'] = $this->pelotones->get1Cdt();

		$data['CmdtB'] = $this->pelotones->get2Cmdt();
		$data['ComGrupoB'] = $this->pelotones->get2ComGrupo();
		$data['ComEscB'] = $this->pelotones->get2ComEsc();
		$data['CptBanB'] = $this->pelotones->get2CptBan();
		$data['TteB'] = $this->pelotones->get2Tte();
		$data['AlferezB'] = $this->pelotones->get2Alferez();
		$data['subAlferezB'] = $this->pelotones->get2SubAlferez();
		$data['CdtB'] = $this->pelotones->get2Cdt();

		$data['Sgto2C'] = $this->pelotones->get3Sgto2();
		$data['Cbo1C'] = $this->pelotones->get3Cbo1();
		$data['Cbo2C'] = $this->pelotones->get3Cbo2();
		$data['CboC'] = $this->pelotones->get3Cbo();
		$data['SltpC'] = $this->pelotones->get3Sltp();
		$data['SlcC'] = $this->pelotones->get3Slc();
		$data['RlctC'] = $this->pelotones->get3Rclt();
		//End Cantidades



		//Get Info Pelotones
		$data['pel1'] = $this->pelotones->getPel1();
		$data['pel2'] = $this->pelotones->getPel2();
		$data['pel3'] = $this->pelotones->getPel3();
		//End Info Pelotones







		$this->load->view('header1');
		$this->load->view('pelotones', $data);
		$this->load->view('modal_pelotones', $data);
		$this->load->view('scriptpelotones', $data);
		$this->load->view('footer',$data);

		$this->load->database();



	}

	public function galeria()
	{
		$this->load->helper('form');
		$this->load->model("index");
		$this->load->model("gallery");
		$data['ts3'] = $this->index->getts3();
		$data['galeria'] = $this->gallery->getGallery();
		$data['galeriaFirst'] = $this->gallery->getGalleryFirst();
		$this->load->view('header1');
		$this->load->view('galeria', $data);
		$this->load->view('footer',$data);
	}

	public function login()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('login');
		$this->load->view('footer',$data);
	}

	public function formulario()
	{
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('formulario');
		$this->load->view('footer',$data);
	}

	public function mision()
	{

		$id_mision=$this->input->get('mision');
		$this->load->model('mission_model');
		$this->load->model("index");

		$infoMision = $this->mission_model->getDataMision($id_mision);
		$asistMision = $this->mission_model->getAsistMision($id_mision);

		$data['nusuarios'] = $this->index->usuarios_index();
		$data['nmision'] = $this->mission_model->nasistMision($id_mision);
		
		if($this->mission_model->noAsistentesMision($id_mision) != NULL){
			$divisionAsist = 100/$this->mission_model->noAsistentesMision($id_mision);
			$data['porcentajeAsist'] = $divisionAsist*$this->mission_model->nasistMision($id_mision);
		}else{
			$data['porcentajeAsist'] = "0";
		}
		if($infoMision != null){
			
				$data['mision'] = $infoMision;
				$data['asist'] = $asistMision;

							$data['ts3'] = $this->index->getts3();
							$this->load->view('header1');
							$this->load->view('mision',$data);
							$this->load->view('footer',$data);
			
		}

	}









	public function sendMailGmailrecluta()
	{
	//configuracion para gmail
		$configGmail = array(
			'protocol' => '-DELETED-',
			'smtp_host' => '-DELETED-',
			'smtp_port' => -DELETED-, //
			'smtp_user' => '-DELETED-',
			'smtp_pass' => '-DELETED-',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);    

		//cargamos la libreria email de ci
		$this->load->library("email");
 		$nombre=$this->input->post('nombre');
 		$steam=$this->input->post('steam');
 		$nick=$this->input->post('nick');
 		$razon=$this->input->post('razon');
 		$text1="Nombre: ".$nombre.",<br/><br/>Steam: ".$steam.",<br/><br/>Nick: ".$nick.",<br/><br/>Razón: ".$razon.".";
 		$recluta="Nuevo recluta: ".$nombre.".";
 		$confirmado="Inscripción enviada, se te aceptará cuando contactes a un instructor";
 		$rechazado="Hubo un problema al enviar el correo, porfavor contacta directamente con un instructor";


	
 
		//cargamos la configuración para enviar con gmail
		
		$this->email->initialize($configGmail);
		$this->email->from('-DELETED-');
		$this->email->to("-DELETED-"); //clanfactions.arma3@gmail.com
		$this->email->subject($recluta);
		$this->email->message($text1);
		$this->email->send();
		
		//Ingreso de datos a la db
		$this->load->model('login_model');
 		$this->load->helper('date_helper');
 		$time = get_date();

 		$registro = array(
 			'nick' => $nick,
 			'steam' => $steam,
 			'zeus' => '0',
 			'pass' => -DELETED-,
 			'fecha' => $time,
 			'id_pel' => '1',
 			'estado' => '0',
 			'id_rango' => '18',
 			'img_perfil' => 'new_profile.png',
 			'razon' => $razon,
 			'usu_desc' => ''
 			);
 		
 		$nusu = $this->index->usuarios_index();

 		

		$this->login_model->new_user($registro);




		//devolver al usuario 
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('formularioConf');
		$this->load->view('footer',$data);


	}

	public function sendMailGmailasistencia()
	{
		//cargamos la libreria email de ci
		$this->load->library("email");
 		$nombre=$this->input->post('nombre');
 		$fecha=$this->input->post('fecha');
 		$razon=$this->input->post('razon');
 		$text2="Nombre: ".$nombre.",<br/><br/>Fecha: ".$fecha.",<br/><br/>Razón: ".$razon.".";
 		$justificacion="Justificación ".$nombre.".";
		//configuracion para gmail
		
		$configGmail = array(
			'protocol' => '-DELETED-',
			'smtp_host' => '-DELETED-',
			'smtp_port' => -DELETED-, //
			'smtp_user' => '-DELETED-',
			'smtp_pass' => '-DELETED-',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);    
 
		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);
 
		$this->email->from('-DELETED-');
		$this->email->to("-DELETED-"); 
		$this->email->subject($justificacion);
		$this->email->message($text2);
		$this->email->send();
		//con esto podemos ver el resultado
		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('asistenciaConf');
		$this->load->view('footer',$data);
	}


}
