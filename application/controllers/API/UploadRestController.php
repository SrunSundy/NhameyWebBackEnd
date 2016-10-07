<?php
class UploadRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function shopLogoUploadImage(){
		
		if ( ! empty($_FILES))
		{
			

			$config['upload_path'] = "./uploadimages/logo/original";
			$config['allowed_types'] =  'gif|jpg|png';
			$config['max_size'] = '20120';
			$config['max_width']  = '5000';
			$config['max_height']  = '5000';
			$config['min_width'] = '300';
			$config['min_height'] = '300';
			
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
				
				if($_FILES['file']['size'] > 100000){
					$this->resizeImage("./uploadimages/logo/big/".$new_name,"./uploadimages/logo/original/".$new_name,0.5,90);
					$this->resizeImage("./uploadimages/logo/small/".$new_name,"./uploadimages/logo/original/".$new_name,0.2,100 , $new_name);
					
				}else{
					$this->resizeImage("./uploadimages/logo/big/".$new_name,"./uploadimages/logo/original/".$new_name,1, 90 , $new_name);
					$this->resizeImage("./uploadimages/logo/small/".$new_name,"./uploadimages/logo/original/".$new_name,0.8,50 , $new_name);
					
				}
				
				/* $percent = 0.5;
				$source_img =$targetfolder."original/".$new_name;
				$destination_img = "./uploadimages/logo/big/".$new_name;
				$info = getimagesize($source_img);				
				list($width, $height) = $info;
				$new_width = $width * $percent;
				$new_height = $height * $percent;				
				// Resample
				$image_p = imagecreatetruecolor($new_width, $new_height);
				if ($info['mime'] == 'image/jpeg') 
					$image = imagecreatefromjpeg($source_img);		
				elseif ($info['mime'] == 'image/gif') 
					$image = imagecreatefromgif($source_img);		
				elseif ($info['mime'] == 'image/png') 
					$image = imagecreatefrompng($source_img);				
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);			
				imagejpeg($image_p, $destination_img, 50);
				 
				
				$config_resize = array();
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = "./uploadimages/logo/original/".$new_name;
				$config_resize['create_thumb'] = TRUE;
				$config_resize['maintain_ratio'] = TRUE;
				$config_resize['width'] = (int)$new_width;
				$config_resize['height'] = (int)$new_height;
				$config_resize['new_image'] = "./uploadimages/logo/small/".$new_name;
				$this->load->library('image_lib' , $config_resize);
				$this->image_lib->resize(); */
			}
			$json = json_encode($data);
			echo $json;
		}
		
	}
	public function shopCoverUploadImage(){
		if ( ! empty($_FILES))
		{
			if($_FILES['file']['size']<10240)
			{
				$data = array();
				$data['is_upload']= false;
				$data['message'] =" File cannot be uploaded. It's too small".$_FILES['file']['size'];
				$json = json_encode($data);
				echo $json;
				return ;
			}
		
			$config['upload_path'] = "./uploadimages/cover/original";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '20120';
			$config['max_width']  = '8000';
			$config['max_height']  = '5000';
			$config['min_width'] = '500';
			$config['min_height'] = '300';
				
			$new_name = "cover_".$this->generateRandomString(20).".jpg";
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
		
				$this->resizeImage("./uploadimages/cover/big/".$new_name,"./uploadimages/cover/original/".$new_name,0.5,50);
				$this->resizeImage("./uploadimages/cover/small/".$new_name,"./uploadimages/cover/original/".$new_name,0.2,50);
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
			$config['max_size'] = '200';
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
					$report["filename"] =$new_name;
					array_push($reportwrapper , $report);
				}
			}
			
			$data["fileupload"] = $reportwrapper;
			$json = json_encode($data);
			echo $json;
		
		}
	}	
	
	public function uploadIconImage(){
		$response = array();
		if ( ! empty($_FILES))
		{		
			$new_name = "icon_".$this->generateRandomString(20).".jpg";
			$target_dir = "./uploadimages/icon/";
			$target_file = $target_dir.$new_name;
			$uploadOk = 1;
			$message = "";
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["file"]["tmp_name"]);
				if($check !== false) {
					$message = " File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					$message = " File is not an image.";
					$uploadOk = 0;
				}
			}
			
			// Check file size
			if ($_FILES["file"]["size"] > 5000000) {
				$message = $message."Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if(strcasecmp ( $imageFileType , "jpg" )  != 0  && strcasecmp ( $imageFileType , "png" )  != 0 
			&& strcasecmp ( $imageFileType , "jpeg" ) != 0  && strcasecmp ( $imageFileType , "gif" ) != 0
			) {
				$message = $message." Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$message = $message." Sorry, your file was not uploaded.";
				$response['is_upload']= false; 
				$response["message"] = $message;
				// if everything is ok, try to upload file
			} else {	
							
				if($this->resizeImageFixpixel($target_file ,$_FILES["file"]["tmp_name"] , 60 ,80)){
					$message = "File upload successfully!";
					$response['is_upload']= true;
					$response["message"] = $message;
					$response['filename'] = $new_name;
				}else{
					$message = "Sorry, there was an error uploading your file.";
					$response['is_upload']= false;
					$response["message"] = $message;
				}
	
			}
		}else{
			$response['is_upload']= false;
			$response["message"] = "No File!";			
		}
		

		$json = json_encode($response);
		echo $json;
	}
	
	public function removeIcon(){
		$iconname = $this->input->post('iconname');		
		$targetfile = "./uploadimages/icon/".$iconname;
		echo $iconname;
		$response = array();
		if(file_exists($targetfile)){
			unlink($targetfile);
			$response['message'] ="File is removed";
				
		}else{
			$response['message'] ="File not found";
		}
		$json = json_encode($response);
		echo $json;
	}
	
	public function removeShopSingleImage(){
		$removedata = $this->input->post('removeimagedata');
		$removetype = $removedata["image_type"];
		$imagename = $removedata["imagename"]; 
		$srcbig = "";
		$srcsmall = "";
		if($removetype == "1"){
			$srcbig = "./uploadimages/logo/big/";
			$srcsmall = "./uploadimages/logo/small/";
		}else if($removetype == "2"){
			$srcbig = "";
		}else if($removetype == "3"){
			$srcbig = "./uploadimages/shopimages/";
		}
		
		$data['message'] = array();
		$report = array();
		if(file_exists($srcbig.$imagename)){
			unlink($srcbig.$imagename);
			$report['big_image_message'] ="File is removed";
			
		}else{
			$report['big_image_message'] ="File not found";			
		}		
		if(file_exists($srcsmall.$imagename)){
			unlink($srcsmall.$imagename);
			$report['small_image_message'] ="File is removed";
				
		}else{
			$report['small_image_message'] ="File not found";
		}
		array_push($data , $report);
		$json = json_encode($data);
		echo $json;
	}
	
	public function removeShopMultipleImage(){
		$removedata = $this->input->post('removeimagedata');
		$num_image = count($removedata);
		$data = array();
		for($i=0; $i < $num_image; $i++){
			if(file_exists("./uploadimages/shopimages/".$removedata[$i]["filename"])){
				unlink("./uploadimages/shopimages/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
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
	
	function resizeImage($targetfolder, $sourcefolder , $resizepixelpercent, $quality){
		
		$source_img =$sourcefolder;
		$info = getimagesize($source_img);
		
		$percent = $resizepixelpercent;
		list($width, $height) = $info;
		$new_width = $width * $percent;
		$new_height = $height * $percent;
		
		
		$destination_img = $targetfolder;
		// Resample
		$image_p = imagecreatetruecolor($new_width, $new_height);
		if ($info['mime'] == 'image/jpeg')
			$image = imagecreatefromjpeg($source_img);
		elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source_img);
		elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source_img);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		return imagejpeg($image_p, $destination_img, $quality);
		
	}
	
	function resizeImageFixpixel($targetfolder , $sourcefolder , $size , $quality){
		
		$source_img = $sourcefolder;
		$destination_img = $targetfolder;
		$info = getimagesize($source_img);
		list($width, $height) = $info;
		$new_width = $size;
		$new_height = $size;
		if($width > $height){
			$widthbigger = $width/$height;
			$new_width = $size;
			$new_height = $size/$widthbigger;
		}else{
			$heightbigger = $height/$width;
			$new_height = $size;
			$new_width = $size/$heightbigger;
		}
			
		// Resample
		$image_p = imagecreatetruecolor($new_width, $new_height);
		if ($info['mime'] == 'image/jpeg')
			$image = imagecreatefromjpeg($source_img);
		elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source_img);
		elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source_img);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		return imagejpeg($image_p, $destination_img, $quality);	
		
	}
}
?>