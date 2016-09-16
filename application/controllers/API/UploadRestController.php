<?php
class UploadRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function shopLogoUploadImage(){
		
		
		if ( ! empty($_FILES))
		{
			$config['upload_path'] = "./uploadimages";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '768000';
			//$_FILES["file"]['name'];
			$new_name = $this->generateRandomString(20).".jpg";
			$config['file_name'] = $new_name;
			
			$this->load->library('upload', $config);
			$data = array();
			
			if (! $this->upload->do_upload("file")) {
				$data['is_upload']= false;
				$data['message'] =" File cannot be uploaded";
			
			}else{
				$data['is_upload'] = true;
				$data['message'] =" File is uploaded";
				$data['filename'] = $new_name;
			}
			$json = json_encode($data);
			echo $json;
		}
		
	}
	
	public function removeShopLogoImage(){
		
		$logoimagename = $this->input->post('logoimagename');
		unlink("./uploadimages/" . $logoimagename);
		$data['message'] =" File is removed";
		$json = json_encode($data);
		echo $json;
	}
	
	function generateRandomString($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}
?>