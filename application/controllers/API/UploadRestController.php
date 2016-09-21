<?php
class UploadRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function shopLogoUploadImage(){
		$data = array();
		if($_FILES['file']['size']<10240)
		{
			$data['is_upload']= false;
			$data['message'] =" File cannot be uploaded. It's too small".$_FILES['file']['size'];
			$json = json_encode($data);
			echo $json;
			return ;
		}
		if ( ! empty($_FILES))
		{
			$image_info = getimagesize($_FILES["file"]["tmp_name"]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];
			
			$config['upload_path'] = "./uploadimages/logo/original";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '5120';
			$config['max_width']  = '5000';
			$config['max_height']  = '5000';
			$config['min_width'] = '300';
			$config['min_height'] = '300';
			//$_FILES["file"]['name'];
			$new_name = "logo_".$this->generateRandomString(20).".jpg";
			$config['file_name'] = $new_name;
				
			$this->load->library('upload', $config);
			$data = array();
				
			if (! $this->upload->do_upload("file")) {
				$data['is_upload']= false;
				$data['message'] =" File cannot be uploaded".$this->upload->display_errors();
				
			}else{
				$data['is_upload'] = true;
				$data['message'] =" File is uploaded";
				$data['filename'] = $new_name;
				$data['dimension'] = $image_width."___".$image_height;
				
				$percent = 0.5;
				$source_img ="./uploadimages/logo/original/".$new_name;
				$destination_img = "./uploadimages/logo/big/".$new_name;
				$info = getimagesize($source_img);
				
				list($width, $height) = $info;
				$new_width = $width * $percent;
				$new_height = $height * $percent;				
				// Resample
				$image_p = imagecreatetruecolor($new_width, $new_height);
				$image = imagecreatefromjpeg($source_img);
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
				//$image = imagecreatefromjpeg($source_img);			
				imagejpeg($image, $destination_img, 50);
				
		
				$config_resize = array();
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = "./uploadimages/logo/original/".$new_name;
				$config_resize['create_thumb'] = TRUE;
				$config_resize['maintain_ratio'] = TRUE;
				$config_resize['width'] = 130;
				$config_resize['height'] = 130;
				$config_resize['new_image'] = "./uploadimages/logo/small/".$new_name;
				$this->load->library('image_lib' , $config_resize);
				$this->image_lib->resize(); 
			}
			$json = json_encode($data);
			echo $json;
		}
		
	}
	
	public function shopImageDetailUpload(){
		
		if ( ! empty($_FILES))
		{
			$config['upload_path'] = "./uploadimages/shopimages";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '768000';
			
			$this->load->library('upload');
		
			$files = $_FILES;
			$number_of_files = count($_FILES['file']['name']);
			//$errors = 0;
			$data = array();
			$reportwrapper = array();

			for ($i = 0; $i < $number_of_files; $i++)
			{
				$report = array();
				$_FILES['file']['name'] = $files['file']['name'][$i];
				$_FILES['file']['type'] = $files['file']['type'][$i];
				$_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
				$_FILES['file']['error'] = $files['file']['error'][$i];
				$_FILES['file']['size'] = $files['file']['size'][$i]; 
				
				$new_name = "detail_".$this->generateRandomString(20).".jpg";
				$config['file_name'] = $new_name;
				
				$this->upload->initialize($config);
			
				if (! $this->upload->do_upload("file")) {
					//$errors++;
					$report['is_upload']= false; 
					$report["message"] = "File(s) cannot be uploaded";
					$report["filename"] =$_FILES['file']['name'];
					array_push($reportwrapper , $report);
				}else{
					$report['is_upload']= true;
					$report["message"] = "File(s) upload successfully!";
					$report["filename"] =$new_name."|".$_FILES['file']['name'];
					array_push($reportwrapper , $report);
				}
			}
			
			$data["fileupload"] = $reportwrapper;
			$json = json_encode($data);
			echo $json;
		
		}
	}	
	
	public function removeShopSingleImage(){
		$removedata = $this->input->post('removeimagedata');
		$removetype = $removedata["image_type"];
		$logoimagename = $removedata["logoimagename"]; 
		$src = "";
		if($removetype == "1"){
			$src = "./uploadimages/logo/big/";
		}else if($removetype == "2"){
			$src = "";
		}else if($removetype == "3"){
			$src = "./uploadimages/shopimages/";
		}
		
		if(file_exists($src.$logoimagename)){
			unlink($src.$logoimagename);
			$data['message'] ="File is removed";
		}else{
			$data['message'] ="File not found";			
		}		
		
		$json = json_encode($data);
		echo $json;
	}
	
	public function removeShopMultipleImage(){
		$removedata = $this->input->post('removeimagedata');
		$num_image = count($removedata);
		$data = array();
		for($i=0; $i < $num_image; $i++){
			if(file_exists("./uploadimages/shopimages/".$removedata[$i])){
				unlink("./uploadimages/shopimages/".$removedata[$i]);
				$data[$removedata[$i]]= "File is removed";
			}else{
				$data[$removedata[$i]] = 'File not found';
			}
		}
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
		return $randomString."_".time();
	}
}
?>