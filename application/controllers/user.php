<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {
	public function login()
	{
		$this->load->library('session');
		$nick = $this->input->post('name');
		$pass = $this->input->post('pass');

		$this->load->model('usuarios');
		$fila = $this->usuarios->getUser($nick);
		

		if($fila != null){
			if($fila->pass == $pass){
				if($fila->estado != 0){
					if($fila->zeus != 0){
						$data = array(
						-DELETED-
						'login' => true
						);
						var_dump($data);
					}else{
						$data = array(
						-DELETED-
						'login' => true
						);

					}
                                                                   
					
						$this->session->set_userdata($data);

						$this->load->model('mission_model');
						$data['last_missions'] = $this->mission_model->sort_3_missions();
						$data['nusuarios'] = $this->index->usuarios_index();
						$data['ts3'] = $this->index->getts3();
						$data['video'] = $this->index->video_index();
						$this->load->view('header1');
						$this->load->view('index', $data);
						$this->load->view('footer',$data);

				}else{

					header("Location: " . site_url("main/login"));

				}
			}else{
				header("Location: " . site_url("main/login"));
			}
		}else{
			header("Location: " . site_url("main/login"));
		}

	}



	public function logOut()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		header('Location: ' . site_url("main/login"));

	}

	public function profile()
	{
			
			$nick = $this->input->get('nombre');
			$id = $this->input->get('id');
			$this->load->model('usuarios');
			$this->load->model('mission_model');
			$infoUser = $this->usuarios->getDataUser($id);
			$espList = $this->usuarios->getEspUser($id);
			$lastMissions = $this->mission_model->sort_3_missions_profile($id);
			$asist = $this->mission_model->sort_asist($id);
			$puntosTotales = $this->usuarios->getPTotales($id);
			//$inasistencias = 


			if($this->usuarios->noAsistidasUser($id) != NULL){
					
					$divisionAsist = 100/$this->usuarios->cantidadAsistencia($id);
					$data['porcentajeAsist'] = $divisionAsist*$this->usuarios->nUserMision($id);
				

			}else{
				$data['porcentajeAsist'] = "0";
			}


			if($infoUser != null){
						$data['noAsistidas'] = $this->usuarios->noAsistidasUser($id);
						$data['puntosTotales'] = $puntosTotales;
						$data['asistencia'] = $asist;
						$data['misiones'] = $lastMissions;
						$data['userData'] = $infoUser;
						$data['espList'] = $espList;
								$this->load->model("index");
								$data['ts3'] = $this->index->getts3();
								$this->load->view('header1');
								$this->load->view('profile',$data);
								$this->load->view('footer',$data);


			}else{
				echo "Hubo un error, porfavor recargue la pagina";
				header('http://localhost/LegionAegis/index.php/user/profile?nombre=$nicks&id=$id');
			}
	}
	public function modificar_Perfil()
	{
		$nick = $this->input->get('nick');
		$id = $this->input->get('profile');
		$this->load->model('usuarios');
		$infoUser = $this->usuarios->getDataUser($id);
		$getPelotones = $this->usuarios->getPelotones();
		$getRangos = $this->usuarios->getRangos();
		$getNesp1 = $this->usuarios->getEspInfanNum($id);
		$getNesp2 = $this->usuarios->getEspSopNum($id);
		$getNesp3 = $this->usuarios->getEspFFEENum($id);
		$this->load->database();
				$getEsp1 = $this->db->query("SELECT * 
                                    FROM esp_list ESP
                                    WHERE NOT EXISTS (
                                        SELECT *
                                        FROM esp_taken EST
                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
                                    	)
                                    && campo = 1");
				$getEsp2 = $this->db->query("SELECT * 
		                                    FROM esp_list ESP
		                                    WHERE NOT EXISTS (
		                                        SELECT *
		                                        FROM esp_taken EST
		                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
		                                    	)
		                                    && campo = 2");
				$getEsp3 = $this->db->query("SELECT * 
		                                    FROM esp_list ESP
		                                    WHERE NOT EXISTS (
		                                        SELECT *
		                                        FROM esp_taken EST
		                                        WHERE EST.id_usu = '".$id."' && EST.id_especialidad = ESP.id_especialidad
		                                    	)
		                                    && campo = 3");
		
		$data['getEsp1'] = $getEsp1;
		$data['getEsp2'] = $getEsp2;
		$data['getEsp3'] = $getEsp3;
		$data['getNEsp1'] = $getNesp1;
		$data['getNEsp2'] = $getNesp2;
		$data['getNEsp3'] = $getNesp3;
		$data['userData'] = $infoUser;
		$data['getPelotones'] = $getPelotones;
		$data['getRangos'] = $getRangos;
		

		$this->load->model("index");
		$data['ts3'] = $this->index->getts3();
		$this->load->view('header1');
		$this->load->view('gestion/profile_modify',$data);
		$this->load->view('footer',$data);

	}

	public function ingresoEsp1()
	{
		$this->load->model("usuarios");
		$getNesp1 = $this->usuarios->getEspInfanNum($id);
		$id = $this->input->post('user');
		$nick = $this->input->post('nick');
		$this->load->helper('date_helper');
 		$time = get_date();
		for($i1 = 1; $i1 <= $getNesp1; $i1++){
			$idEsp = $this->input->post('esp1-'.$i1.'');
			if($idEsp){
				$ingresoEsp1 = array(
					'esp_fecha' => $time,
					'id_usu' => $id,
					'id_especialidad' => $idEsp
				);
				$this->usuarios->ingEspInfan($ingresoEsp1);
				var_dump($ingresoEsp1);
			}else{
				echo "no hizo ni una wea";
				header('Location: ..main/index');
			}



		}
		
		//getEspInfanNum
		header("Location: modificar_Perfil?nick=$nick&profile=$id");

	}

	public function ingresoEsp2()
	{
		
		$this->load->model("usuarios");
		$getNesp2 = $this->usuarios->getEspSopNum($id);
		$id = $this->input->post('user');
		$nick = $this->input->post('nick');
		$this->load->helper('date_helper');
 		$time = get_date();
		for($i2 = 1; $i2 <= $getNesp2; $i2++){
			$idEsp = $this->input->post('esp2-'.$i2.'');
			if($idEsp){
				$ingresoEsp2 = array(
					'esp_fecha' => $time,
					'id_usu' => $id,
					'id_especialidad' => $idEsp
				);
				$this->usuarios->ingEspSop($ingresoEsp2);
			}else{
				echo "no hizo ni una wea";
				header('Location: ..main/index');
			}



		}
		
		//getEspInfanNum
		header("Location: modificar_Perfil?nick=$nick&profile=$id");

	

	}

	public function ingresoEsp3()
	{
		
		$this->load->model("usuarios");
		$getNesp3 = $this->usuarios->getEspFFEENum($id);
		$id = $this->input->post('user');
		$nick = $this->input->post('nick');
		$this->load->helper('date_helper');
 		$time = get_date();
		for($i3 = 1; $i3 <= $getNesp3; $i3++){
			$idEsp = $this->input->post('esp3-'.$i3.'');
			if($idEsp){
				$ingresoEsp3 = array(
					'esp_fecha' => $time,
					'id_usu' => $id,
					'id_especialidad' => $idEsp
				);
				$this->usuarios->ingEspFFEE($ingresoEsp3);
			}else{
				echo "no hizo ni una wea";
				header('Location: ..main/index');
			}



		}
		
		//getEspInfanNum
		header("Location: modificar_Perfil?nick=$nick&profile=$id");

	

	}

	public function infouser_modify()
	{
		$this->load->database();
		$id = $this->input->post('user');
		$nick = $this->input->post('nick');
		$usudesc = $this->input->post('usudesc');
		if($usudesc){
			$this->db->query("UPDATE `usuario` SET `usu_desc` = '".$usudesc."'
			WHERE `id_usu` = '".$id."'");
		}
		$email = $this->input->post('email');
		if($email){
			$this->db->query("UPDATE `usuario` SET `email` = '".$email."'
			WHERE `id_usu` = '".$id."'");
		}
		$steam = $this->input->post('steam');
		if($steam){
			$this->db->query("UPDATE `usuario` SET `steam` = '".$steam."'
			WHERE `id_usu` = '".$id."'");
		}
		$pass = $this->input->post('pass');
		if($pass){
			$query = $this->db->query("UPDATE `usuario` SET `pass` = '".$pass."'
			WHERE `id_usu` = '".$id."'");
			
		}
		$peloton = $this->input->post('peloton');
		if($peloton){
			$query = $this->db->query("UPDATE `usuario` SET `id_pel` = '".$peloton."'
			WHERE `id_usu` = '".$id."'");
			
		}
		$rango = $this->input->post('rango');
		if($rango){
			$query = $this->db->query("UPDATE `usuario` SET `id_rango` = '".$rango."'
			WHERE `id_usu` = '".$id."'");
			
		}
		$estado = $this->input->post('estado');
		if($rango){
			$query = $this->db->query("UPDATE `usuario` SET `estado` = '".$estado."'
			WHERE `id_usu` = '".$id."'");
			
		}
		$descuento = $this->input->post('descuento');
		$nousados = $this->input->post('nousados');
		$usados = $this->input->post('usados');
		if($descuento){
			$new_nousados=$nousados-$descuento;
			$new_usados=$usados+$descuento;
			$query = $this->db->query("UPDATE `puntos` SET `nousados` = '".$new_nousados."'
			WHERE `id_usu` = '".$id."'");
			$query2 = $this->db->query("UPDATE `puntos` SET `usados` = '".$new_usados."'
			WHERE `id_usu` = '".$id."'");
			
		}
		$new_nick = $this->input->post('new_nick');
		if($new_nick){
			$this->db->query("UPDATE `usuario` SET `nick` = '".$new_nick."'
			WHERE `id_usu` = '".$id."'");
			header("Location: modificar_Perfil?nick=$new_nick&profile=$id");
		}
		else{
		
			header("Location: modificar_Perfil?nick=$nick&profile=$id");
		}

	}

	public function cambio_img(){
		$this->load->database();
		$id = $this->input->post('user');
		$nick = $this->input->post('nick');
		$this->load->helper('date_helper');
 		$time = get_date_hour();

		$config['allowed_types'] = 'jpg';
 		$config['upload_path'] = './assets/images/profile/';
 		$config['file_name'] = ''.$nick.'_profile_'.$time.'.jpg';
 		$config['remove_spaces'] = TRUE;
 		$config['overwrite'] = TRUE;
 		$this->load->library('upload',$config);

 		if($this->upload->do_upload('image')){
 			$this->db->query("UPDATE `usuario` SET `img_perfil` = '".$nick."_profile_".$time.".jpg' WHERE `id_usu` = '".$id."'");
 			header("Location: modificar_Perfil?nick=$nick&profile=$id");
 		}else{
 			header("Location: modificar_Perfil?nick=$nick&profile=$id");
 		}

		//header("Location: modificar_Perfil?nick=$nick&profile=$id");
	}


}