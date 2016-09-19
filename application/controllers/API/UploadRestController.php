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
			$new_name = "logo_".$this->generateRandomString(20).".jpg";
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
			$errors = 0;
			//$arrfilenames = array();
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
				
				//$arrfilenames["image_".$i] = $new_name;
				
				// we have to initialize before upload
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
					//array_push($arrfilenames,$new_name."|".$_FILES['file']['name']);
				}
			}
			
			/* if ($errors > 0) {
				$data['is_upload']= false;
				$data["message"] = "File(s) cannot be uploaded";
				$data["filename"] = $arrfilenames;
			}else{
				$data['is_upload']= true;
				$data["message"] = "File(s) upload successfully!";
				$data["filename"] = $arrfilenames;
				
			} */
			$data["fileupload"] = $reportwrapper;
			//$data["filename"] = $arrfilenames;
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
			$src = "./uploadimages/";
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
		return $randomString;
	}
}
?>