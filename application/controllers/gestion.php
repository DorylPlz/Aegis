<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gestion extends CI_Controller {
	public function adm()
	{

		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('/gestion/adm');
		$this->load->view('footer',$data);
	}

	public function main()
	{
		$this->load->model("index");
		$this->load->model('mission_model');
		$this->load->model('gestion_model');
		$this->load->model('usuarios');

		$data['misiones'] = $this->gestion_model->sort_missions();
		$data['nusuarios'] = $this->index->usuarios_index();
		$data['usuNuevoN'] = $this->gestion_model->new_userN();
		$data['usuNuevo'] = $this->gestion_model->new_user();
		$data['last_missions'] = $this->mission_model->sort_3_missions();
		$data['ts3'] = $this->index->getts3();
		$data['peloton_1'] = $this->gestion_model->peloton_1();
		$data['peloton_2'] = $this->gestion_model->peloton_2();
		$data['peloton_3'] = $this->gestion_model->peloton_3();
		$data['get1Pel'] = $this->usuarios->get1Pel();
		$data['get2Pel'] = $this->usuarios->get2Pel();
		$data['get3Pel'] = $this->usuarios->get3Pel();


		$this->load->view('header1');
		$this->load->view('/gestion/encargado_',$data);
		$this->load->view('footer',$data);
	}

	public function new_mission()
	{

		$this->load->model('mission_model');
		$data['zeus'] = $this->mission_model->getZeus();
		$data['estado'] = '';

		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('/gestion/encargado_nmision',$data);
		$this->load->view('footer',$data);
	}

	public function new_mission_ingreso()
	{
		$this->load->model('mission_model');
		$data['zeus'] = $this->mission_model->getZeus();
		$nombre=$this->input->post('nombre');
 		$fecha=$this->input->post('fecha');
 		$zeus=$this->input->post('zeus');
 		$tipo=$this->input->post('tipo');
 		$mapa=$this->input->post('mapa');
 		$briefing=$this->input->post('brief');
 		$objetivo=$this->input->post('obj');



 		$config['allowed_types'] = 'jpg';
 		$config['upload_path'] = './assets/images/mission/';
 		$config['file_name'] = 'mission_'.$fecha.'_'.$zeus.'_'.$tipo;
 		$config['remove_spaces'] = TRUE;
 		$config['overwrite'] = TRUE;
 		$this->load->library('upload',$config);

 		if($this->upload->do_upload('image')){
 			$registro_mission = array(
 			'nombre' => $nombre,
 			'fecha' => $fecha,
 			'id_zeus' => $zeus,
 			'tipo' => $tipo,
 			'mapa' => $mapa,
 			'brief' => $briefing,
 			'obj' => $objetivo,
 			'img_mision' => 'mission_'.$fecha.'_'.$zeus.'_'.$tipo.'.jpg'
 		);
 		$this->load->model('mission_model');
		$query = $this->mission_model->new_mission($registro_mission);

		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$data['estado'] = 'Misión registrada correctamente';
		$this->load->view('header1');
		$this->load->view('/gestion/encargado_nmision',$data);
		$this->load->view('footer',$data);



 		}else{
 			$registro_mission = array(
		 			'nombre' => $nombre,
		 			'fecha' => $fecha,
		 			'id_zeus' => $zeus,
		 			'tipo' => $tipo,
		 			'mapa' => $mapa,
		 			'brief' => $briefing,
		 			'obj' => $objetivo,
		 			'img_mision' => 'mission_default.jpg'
		 		);
 		$this->load->model('mission_model');
		$query = $this->mission_model->new_mission($registro_mission);

		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$data['estado'] = 'Misión registrada correctamente con imagen por defecto';
		$this->load->view('header1');
		$this->load->view('/gestion/encargado_nmision',$data);
		$this->load->view('footer',$data);

 		}


 		/*
	*/
	}


	public function asistencia()
	{
		$id_mision = $this->input->get('mision');
		$this->load->model('mission_model');
		$this->load->model('usuarios');
		$data['dataMision'] = $this->mission_model->getDataMision($id_mision);
		$allUsers = $this->usuarios->getAllUser();
		$data['userData'] = $allUsers;


		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$data['nusu'] = $this->index->usuarios_reg();
		$this->load->view('header1');
		$this->load->view('/gestion/encargado_asistencia',$data);
		$this->load->view('footer',$data);
	}

	public function ingresar_asistencia()
	{
		$this->load->model('mission_model');
		$this->load->model('usuarios');
		$this->load->model("index");
		$this->load->model('gestion_model');


	
		
		
		$nusu = $this->index->usuarios_reg();
    	for ($i = 1; $i <= $nusu; $i++) {
			$id_usu=$this->input->post('id_usu'.$i.'');
	        $id_mision=$this->input->post('id_mision');
	        $asistencia=$this->input->post('asistente'.$i.'');
	        $tipo=$this->input->post('tipo');
	        $justificacion=$this->input->post('justificacion'.$i.'');
	        
	        if($asistencia == null){
	        	$asistencia = 0;
	        	if($justificacion == 2){
	        		$asistencia = 2;
	        	}
	        }

	        $data = array();

	            $data[$i] = array(
	                'id_usu' => $id_usu,
	                'id_mision' => $id_mision,
	                'estado' => $asistencia
	            );
	        
	       		
	        	
	        $this->db->insert_batch('asistencia', $data);



	        if($asistencia == 1){
		        if($tipo == 'Entrenamiento'){
		        	
		        	$this->usuarios->regPuntosEntrenamiento($id_usu);
		        	
		       

		        }elseif($tipo == 'Semi-Oficial'){
		        	
		        	$this->usuarios->regPuntosSemi($id_usu);
					
		       

		        }elseif($tipo == 'Oficial'){
		        	
		        	$this->usuarios->regPuntosOf($id_usu);
		        	
		        }
	 	    }

       
		}



		header("Location: ../main/mision?mision=".$id_mision."");
	}

	public function aceptar_Usu()
	{
		$this->load->model('gestion_model');
		$id_usu=$this->input->post('id');
		$usu_estado=$this->input->post('submit');
		echo $usu_estado;
		$this->gestion_model->aceptar_new_user($id_usu,$usu_estado);
		

		header("Location: main");

	}

	public function subirGaleria()
	{
 		$this->load->model('gestion_model');
		$this->load->database();
		$this->load->helper('date_helper');
 		$time = get_date_hour_s();
 		if($this->input->post('submit') && count($_FILES['multipleFiles']['name']) > 0){
 			$cantidad = count($_FILES['multipleFiles']['name']);
 			$files = $_FILES;

 			for ($i=0; $i < $cantidad; $i++){
 				$config['allowed_types'] = 'jpg|png';
		 		$config['upload_path'] = './assets/images/gallery/';
		 		$config['remove_spaces'] = TRUE;
		 		$config['overwrite'] = TRUE;
		 		$config['file_name'] = ''.$time.'_'.$i.'.jpg';
 				$this->load->library('upload');


 				$_FILES['multipleFiles']['name']= $files['multipleFiles']['name'][$i];
 				$_FILES['multipleFiles']['type']= $files['multipleFiles']['type'][$i];
		        $_FILES['multipleFiles']['tmp_name']= $files['multipleFiles']['tmp_name'][$i];
		        $_FILES['multipleFiles']['error']= $files['multipleFiles']['error'][$i];
		        $_FILES['multipleFiles']['size']= $files['multipleFiles']['size'][$i];    

		        $this->upload->initialize($config);
		        if($this->upload->do_upload('multipleFiles')){
		        	$this->db->query("INSERT INTO `galeria` (`ruta_img`) VALUES ('".$time."_".$i.".jpg');");
		        }


		    	header("Location: ../main/galeria");

 			}


 		}else{
 			echo 'meh';
 		}


	}



}