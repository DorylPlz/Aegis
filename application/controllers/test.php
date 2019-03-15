<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {
	

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('pruebassql');
	}
	public function subirwea()
	{

 		
		$this->load->database();
		$this->load->helper('date_helper');
 		$time = get_date_hour_s();
 		if($this->input->post('submit') && count($_FILES['multipleFiles']['name']) > 0){
 			$cantidad = count($_FILES['multipleFiles']['name']);
 			$files = $_FILES;

 			for ($i=0; $i < $cantidad; $i++){
 				$config['allowed_types'] = 'jpg';
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
		        $this->upload->do_upload('multipleFiles');

		        echo $files['multipleFiles']['name'][$i];
		        echo '<br/>';

 			}


 		}else{
 			echo 'meh';
 		}


	}
	


}
