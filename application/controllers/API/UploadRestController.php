<?php
class UploadRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function shopLogoUploadImage(){
	/* 	
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
				
				$percent = 0.5;
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
				$this->image_lib->resize(); 
			}
			$json = json_encode($data);
			echo $json;
		} */
		
		$cropdata = $_POST["json"];
		$cropdata = json_decode($cropdata);
		
		$img_w = (int)$cropdata->img_w;
		$response = array();
		if ( ! empty($_FILES))
		{
			$new_name = "logo_".$this->generateRandomString(20).".jpg";
			$target_small_dir = "./uploadimages/logo/small/";
			$target_medium_dir = "./uploadimages/logo/medium/";
			$target_big_dir = "./uploadimages/logo/big/";
			
				
			$checkdirectory_small = $this->checkDirectory($target_small_dir);
			$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
			$checkdirectory_big = $this->checkDirectory($target_big_dir);
			$allowfiletype = $this->allowImageType(array("image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
			$allowsize = $this->allowImageSize(10240 , 20000000, $_FILES["file"]["size"]);//20MB
			//$allowmindimension = $this->allowImageMinimumDimension(500, 300, $_FILES["file"]["tmp_name"]);
			//$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"]);
			$allowmincrop = $this->allowImageMinimumDimensionCrop(200, 200, $cropdata);
		
			$permission = array();
			array_push($permission ,
				$checkdirectory_small,
				$checkdirectory_medium,
				$checkdirectory_big,
				$allowfiletype,
				$allowsize,
				$allowmincrop
				//$allowmindimension,
				//$allowmaxdimension
			);
			$check = $this->checkPermission($permission);
		
			$message = $check["message"];
			$uploadok =  $check["error"];
			if ($uploadok) {
				$message = " File can not be uploaded.".$message;
				$response['is_upload']= false;
				$response["message"] = $message;
			} else {
															
				$isuploadimg = array();
				/* if($_FILES['file']['size'] > 100000){
					$big = $this->resizeImage($target_big_dir.$new_name,$_FILES["file"]["tmp_name"],0.5,90);
					$small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"],0.2,100);
						
				}else{
					$big = $this->resizeImage($target_big_dir.$new_name,$_FILES["file"]["tmp_name"],1, 90);
					$small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"],0.8,50);
						
				} */
				
			    $big_crop = 960;
				if($img_w < 960){
					$big_crop = $img_w;
				} 
				/* $imgsize = 960;
				list($width, $height) = $_FILES["file"]["tmp_name"];
				if($width < 960){
					$imgsize = $width;
				}	 */			
				//$big = $this->resizeImageFixpixel($target_big_dir.$new_name , $_FILES["file"]["tmp_name"] , 960 , 80);
				$big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
				$medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 180, 80);
				$small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 50, 80);
				
				$errorupload = false;
				array_push($isuploadimg, $big, $medium, $small);
				for($i=0 ; $i<count($isuploadimg); $i++){
					if(!$isuploadimg[$i]){
						$errorupload = true;
						break;
					}
				}
				if($errorupload){
					$message = "There was an error uploading your file.";
					$response['is_upload']= false;
					$response["message"] = $message;
				}else{					
					$response['is_upload'] = true;
					$response['message'] =" File upload successfully!";
					$response['filename'] = $new_name;
				}
		
			}
		}else{
			$response['is_upload']= false;
			$response["message"] = "No File!";
		}		
		$json = json_encode($response);
		echo $json;
		
	}
	public function shopCoverUploadImage(){
		/* if ( ! empty($_FILES))
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
		} */
		
		$cropdata = $_POST["json"];
		$cropdata = json_decode($cropdata);
		
		$img_w = (int)$cropdata->img_w;
		$response = array();
		if ( ! empty($_FILES))
		{
			$new_name = "cover_".$this->generateRandomString(20).".jpg";
			$target_small_dir = "./uploadimages/cover/small/";
			$target_medium_dir = "./uploadimages/cover/medium/";
			$target_big_dir = "./uploadimages/cover/big/";
			$target_big_nocrop_dir = "./uploadimages/cover/big-nocrop/";
				
		
			$checkdirectory_small = $this->checkDirectory($target_small_dir);
			$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
			$checkdirectory_big = $this->checkDirectory($target_big_dir);
			$checkdirectory_bignocrop = $this->checkDirectory($target_big_nocrop_dir);
			$allowfiletype = $this->allowImageType(array("image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
			$allowsize = $this->allowImageSize(10240 , 20000000, $_FILES["file"]["size"]);//20MB
			//$allowmindimension = $this->allowImageMinimumDimension(500, 300, $_FILES["file"]["tmp_name"]);
			//$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"]);
			$allowmincrop = $this->allowImageMinimumDimensionCrop(640, 200, $cropdata);
		
			$permission = array();
			array_push($permission ,
				$checkdirectory_small,
				$checkdirectory_medium,
				$checkdirectory_big,
				$checkdirectory_bignocrop,
				$allowfiletype,
				$allowsize,
				$allowmincrop
				//$allowmindimension,
				//$allowmaxdimension
			);
			$check = $this->checkPermission($permission);
		
			$message = $check["message"];
			$uploadok =  $check["error"];
			if ($uploadok) {
				$message = " File can not be uploaded.".$message;
				$response['is_upload']= false;
				$response["message"] = $message;
			} else {

				$isuploadimg = array();
				//$big = $this->resizeImage($target_big_dir.$new_name,$_FILES["file"]["tmp_name"],0.5,50);
				$big_crop = 960;
				if($img_w < 960){
					$big_crop = $img_w;
				}
				
				$big_nocrop = 960;
				list($width, $height) = $_FILES["file"]["tmp_name"];
				if($width < 960){
					$big_nocrop = $width;
				}
				$big_nocrop = $this->resizeImageFixpixel($target_big_nocrop_dir.$new_name , $_FILES["file"]["tmp_name"] , 960 , 80);
				$big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
				/* $small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"],0.2,50); */
				$medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 640, 80);
				$small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 320, 80);
				$errorupload = false;
				array_push($isuploadimg, $big, $medium, $small);
				for($i=0 ; $i<count($isuploadimg); $i++){
					if(!$isuploadimg[$i]){
						$errorupload = true;
						break;
					}
				}
				if($errorupload){
					$message = "There was an error uploading your file.";
					$response['is_upload']= false;
					$response["message"] = $message;
				}else{
					$response['is_upload'] = true;
					$response['message'] =" File upload successfully!";
					$response['filename'] = $new_name;
				}
		
			}
		}else{
			$response['is_upload']= false;
			$response["message"] = "No File!";
		}
		$json = json_encode($response);
		echo $json;
		
	}
	
	public function shopImageDetailUpload(){
		
	/* 	if ( ! empty($_FILES))
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
					$report["filename"] =$new_name;
					array_push($reportwrapper , $report);
				}
			}
			
			$data["fileupload"] = $reportwrapper;
			$json = json_encode($data);
			echo $json;
		
		} */
		
		
		
		$response = array();
		if ( ! empty($_FILES))
		{
			
			$target_extreme_small_dir = "./uploadimages/shopimages/extreme_small/";
			$target_small_dir = "./uploadimages/shopimages/small/";
			$target_medium_dir = "./uploadimages/shopimages/medium/";
			$target_big_dir = "./uploadimages/shopimages/big/";
			
	
			$reportwrapper = array();
		
			$number_of_files = count($_FILES['file']['name']);		
			for ($i = 0; $i < $number_of_files; $i++){
								
				$report = array();
				$new_name = "detail_".$this->generateRandomString(20).".jpg";
				
				$checkdirectory_extreme_small = $this->checkDirectory($target_extreme_small_dir);
				$checkdirectory_small = $this->checkDirectory($target_small_dir);
				$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
				$checkdirectory_big = $this->checkDirectory($target_big_dir);
				$allowfiletype = $this->allowImageType(array("image/jpeg", "image/gif", "image/png"), $_FILES['file']['type'][$i]);
				$allowsize = $this->allowImageSize(5120 , 20000000, $_FILES["file"]["size"][$i]);//20MB
				$allowmindimension = $this->allowImageMinimumDimension(350, 350, $_FILES["file"]["tmp_name"][$i]);
				$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"][$i]);
				
				$permission = array();
				array_push($permission ,
					$checkdirectory_extreme_small,
					$checkdirectory_small,
					$checkdirectory_medium,
					$checkdirectory_big,
					$allowfiletype,
					$allowsize,
					$allowmindimension,
					$allowmaxdimension
				);
				$check = $this->checkPermission($permission);
				
				$message = $check["message"];
				$uploadok =  $check["error"];
				if ($uploadok) {
					
					$report['is_upload']= false;
					$report["message"] = "File(s) cannot be uploaded.".$message;
					$report["filename"] = $_FILES['file']['name'][$i];
					array_push($reportwrapper , $report);
					
				} else {
						
					$isuploadimg = array();
					/* $big = $this->resizeImage($target_big_dir.$new_name,$_FILES["file"]["tmp_name"][$i],0.4,50);
					$small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"][$i],0.2,50); */
					
					$info = getimagesize($_FILES["file"]["tmp_name"][$i]);
					list($width, $height) = $info;
					
					
					$my_img_size = 0;
					$my_img_medium_size = 0;
					if($width > $height){
						$my_img_size = $width;
						$my_img_medium_size = $width;
					}else{
						$my_img_size = $height;
						$my_img_medium_size = $height;
					}
					
					if($my_img_size > 960){
						$my_img_size = 960;
					}
					
					if($my_img_medium_size > 640){
						$my_img_medium_size = 640;
					}
					
					
					$big = $this->resizeImageFixpixel($target_big_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , $my_img_size, 80);
					$medium = $this->resizeImageFixpixel($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , $my_img_medium_size, 80);
					$small = $this->resizeImageFixpixel($target_small_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , 320, 80);
					$extreme_small = $this->resizeImageFixpixel($target_extreme_small_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , 150, 80);
					
					$errorupload = false;
					array_push($isuploadimg, $big, $medium, $small, $extreme_small);
					for($j=0 ; $j<count($isuploadimg); $j++){
						if(!$isuploadimg[$j]){
							$errorupload = true;
							break;
						}
					}
					if($errorupload){
						$report['is_upload']= false;
						$report["message"] = "File(s) (small/big) cannot be uploaded!";
						$report["filename"] = $_FILES['file']['name'][$i];
					}else{
						$report['is_upload']= true;
						$report["message"] = "File(s) upload successfully!";
						$report["filename"] =$new_name;
					}
					
					
					array_push($reportwrapper , $report);										
				}
			}
			
			$response["fileupload"] = $reportwrapper;
		}
				
		$json = json_encode($response);
		echo $json;
		
	}	
	
	public function uploadIconImage(){
		
		$response = array();
		if ( ! empty($_FILES))
		{		
			$new_name = "icon_".$this->generateRandomString(20).".jpg";
			$target_dir = "./uploadimages/icon/";
			$target_file = $target_dir.$new_name;		
			
			$checkdirectory = $this->checkDirectory($target_dir);
			$allowfiletype = $this->allowImageType(array("image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
			$allowsize = $this->allowImageSize(1 , 20000000, $_FILES["file"]["size"]);//20MB
			
			$permission = array();
			array_push($permission , $checkdirectory ,$allowfiletype , $allowsize);			
			$check = $this->checkPermission($permission);
		
			$message = $check["message"];
			$uploadok =  $check["error"];
			if ($uploadok) {
				$message = " File can not be uploaded.".$message;
				$response['is_upload']= false; 
				$response["message"] = $message;
			} else {	
							
				if($this->resizeImageFixpixel($target_file ,$_FILES["file"]["tmp_name"] , 50 ,80)){
					$message = "File upload successfully!";
					$response['is_upload']= true;
					$response["message"] = $message;
					$response['filename'] = $new_name;
				}else{
					$message = "There was an error uploading your file.";
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
		
		$data['message'] = array();
		$report = array();
		
		$removedata = $this->input->post('removeimagedata');
		$removetype = $removedata["image_type"];
		$imagename = $removedata["imagename"]; 
		$srcbig = "";
		$srcmedium = "";
		$srcsmall = "";
		$srcextremesmall = "";
		$srcbignocrop = "";
		
		if($removetype == "1"){
			$srcbig = "./uploadimages/logo/big/";
			$srcmedium = "./uploadimages/logo/medium/";
			$srcsmall = "./uploadimages/logo/small/";
		}else if($removetype == "2"){
			$srcbig = "./uploadimages/cover/big/";
			$srcbignocrop = "./uploadimages/cover/big-nocrop/";
			$srcmedium = "./uploadimages/cover/medium/";
			$srcsmall = "./uploadimages/cover/small/";
			
			if(file_exists($srcbignocrop.$imagename)){
				unlink($srcbignocrop.$imagename);
				$report['big_nocrop_image_message'] ="File is removed";
					
			}else{
				$report['extreme_small_image_message'] ="File not found";
			}
		}else if($removetype == "3"){
			$srcbig = "./uploadimages/shopimages/big/";
			$srcmedium = "./uploadimages/shopimages/medium/";
			$srcsmall = "./uploadimages/shopimages/small/";
			$srcextremesmall = "./uploadimages/shopimages/extreme_small/";
			
			if(file_exists($srcextremesmall.$imagename)){
				unlink($srcextremesmall.$imagename);
				$report['extreme_small_image_message'] ="File is removed";
			
			}else{
				$report['extreme_small_image_message'] ="File not found";
			}
			
		}
		
		
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
		if(file_exists($srcmedium.$imagename)){
			unlink($srcmedium.$imagename);
			$report['medium_image_message'] ="File is removed";
		
		}else{
			$report['medium_image_message'] ="File not found";
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
			if(file_exists("./uploadimages/shopimages/big/".$removedata[$i]["filename"])){
				unlink("./uploadimages/shopimages/big/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists("./uploadimages/shopimages/small/".$removedata[$i]["filename"])){
				unlink("./uploadimages/shopimages/small/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists("./uploadimages/shopimages/medium/".$removedata[$i]["filename"])){
				unlink("./uploadimages/shopimages/medium/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists("./uploadimages/shopimages/extreme_small/".$removedata[$i]["filename"])){
				unlink("./uploadimages/shopimages/extreme_small/".$removedata[$i]["filename"]);
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
		else 
			return false;
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		return imagejpeg($image_p, $destination_img, $quality);
		
	}
	
	function resizeImageAndCrop($targetfolder, $sourcefolder ,$cropdata , $resizepixelpercent, $quality){
	
		$img_x = (int)$cropdata->img_x;
		$img_y = (int)$cropdata->img_y;
		$img_w = (int)$cropdata->img_w;
		$img_h = (int)$cropdata->img_h;
		
		$source_img =$sourcefolder;
		$info = getimagesize($source_img);
	
		$percent = $resizepixelpercent;
		
		$new_width = $img_w * $percent;
		$new_height = $img_h * $percent;
	
	
		$destination_img = $targetfolder;
		// Resample
		$image_p = imagecreatetruecolor($new_width, $new_height);
		if ($info['mime'] == 'image/jpeg')
			$image = imagecreatefromjpeg($source_img);
		elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source_img);
		elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source_img);
		else
			return false;
		imagecopyresampled($image_p, $image, 0, 0, $img_x, $img_y, $new_width, $new_height, $img_w, $img_h);
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
		else 
			return false;
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		return imagejpeg($image_p, $destination_img, $quality);	
		
	}
	
	function resizeImageFixpixelAndCrop($targetfolder , $sourcefolder, $cropdata , $size , $quality){
	
		$img_x = (int)$cropdata->img_x;
		$img_y = (int)$cropdata->img_y;
		$img_w = (int)$cropdata->img_w;
		$img_h = (int)$cropdata->img_h;
		
		$source_img = $sourcefolder;
		$destination_img = $targetfolder;
		$info = getimagesize($source_img);
		
		$new_width = $size;
		$new_height = $size;
		if($img_w > $img_h){
			$widthbigger = $img_w/$img_h;
			$new_width = $size;
			$new_height = $size/$widthbigger;
		}else{
			$heightbigger = $img_h/$img_w;
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
		else
			return false;
		imagecopyresampled($image_p, $image, 0, 0, $img_x, $img_y, $new_width, $new_height, $img_w, $img_h);
		return imagejpeg($image_p, $destination_img, $quality);
	
	}
	
	
	function checkDirectory( $path ){
		
		$response = array();
		if(!file_exists($path)){
			$response['message'] = "The uploaded path does not appear to be valid!";
			$response['is_allow'] = false;
		}else{			
			$response['message'] = "";
			$response['is_allow'] = true;
		}
		return $response;
		
	}
	
	function allowImageType( $imagetypearr , $file ){
		
		$response = array();
		if(!in_array($file , $imagetypearr)) {
			$response['message'] = "The filetype you are attempting to upload is not allowed!";
			$response['is_allow'] = false;
		}else{			
			$response['message'] = "";
			$response['is_allow'] = true;
		}
		return $response;
		
	}
	
	function allowImageSize( $minsize , $maxsize, $file ){
		$response = array();
		if ($file > $maxsize) {
			$show = $maxsize / 1024;
			$show = $show / 1024;
			$response['message'] = "The file you are attempting to upload is too large! (Maximum size: $show MB) ";
			$response['is_allow'] = false;
			return $response;
		}
		if ($file < $minsize) {
			$show = $minsize / 1024;
			$show = $show / 1024;
			$response['message'] = "The file you are attempting to upload is too small! (Minimum size: $show MB)";
			$response['is_allow'] = false;
			return $response;
		}
		$response['message'] = "";
		$response['is_allow'] = true;
		return $response;
	}
	
	function allowImageMinimumDimension( $minwidth , $minheight , $file){
		
		$response = array();
		$info = getimagesize($file);
		list($width, $height) = $info;
		if($width < $minwidth || $height < $minheight){
			$response['message'] = "The file you are attempting to upload doesn't fit into the allowed dimension!";
			$response['is_allow'] = false;
			return $response;
		}
		$response['message'] = "";
		$response['is_allow'] = true;
		return $response;
		
	}
	
	function allowImageMaximumDimension( $maxwidth , $maxheight , $file){
	
		$response = array();
		$info = getimagesize($file);
		list($width, $height) = $info;
		if($width > $maxwidth || $height > $maxheight){
			$response['message'] = "The file you are attempting to upload doesn't fit into the allowed dimension!";
			$response['is_allow'] = false;
			return $response;
		}
		$response['message'] = "";
		$response['is_allow'] = true;
		return $response;
	
	}
	
	function allowImageMinimumDimensionCrop($minwidth ,$minheight , $cropdata){
		
		$response = array();
		$img_w = (int)$cropdata->img_w;
		$img_h = (int)$cropdata->img_h;
		
		if($img_w < $minwidth || $img_h < $minheight){
			$response['message'] = "The file you are attempting to upload doesn't fit into the allowed dimension!";
			$response['is_allow'] = false;
			return $response;
		}
		$response['message'] = "";
		$response['is_allow'] = true;
		return $response;
	}
	
	function checkPermission( $permission ){
		
		$crash = false;
		$response = array();
		for($i=0 ; $i<count($permission) ; $i++){
			if(!$permission[$i]["is_allow"]){
				$crash = true; 
				$response["error"] = true;
				$response["message"] = $permission[$i]["message"];
				break; 
			}
		} 
		
		if(!$crash){
			$response["error"] = false;
			$response["message"] = "Nice";
		}
		
		return $response;
		
	}
}
?>