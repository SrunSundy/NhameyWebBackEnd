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
		
		
		$response = array();
		if ( ! empty($_FILES))
		{
			$cropdata = $_POST["json"];
			$cropdata = json_decode($cropdata);
			$img_w = (int)$cropdata->img_w;
			
			$new_name = "logo_".$this->generateRandomString(20).".jpg";
			$target_small_dir =  UPLOAD_FILE_PATH."/uploadimages/real/place/logo/small/";
			$target_medium_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/logo/medium/";
			$target_big_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/logo/big/";
			$target_big_nocrop_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/logo/big-nocrop/";
			
				
			$checkdirectory_small = $this->checkDirectory($target_small_dir);
			$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
			$checkdirectory_big = $this->checkDirectory($target_big_dir);
			$checkdirectory_bignocrop = $this->checkDirectory($target_big_nocrop_dir);
			$allowfiletype = $this->allowImageType(array("image/jpg","image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
			$allowsize = $this->allowImageSize(1024 , 20000000, $_FILES["file"]["size"]);//20MB
			//$allowmindimension = $this->allowImageMinimumDimension(500, 300, $_FILES["file"]["tmp_name"]);
			//$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"]);
			$allowmincrop = $this->allowImageMinimumDimensionCrop(200, 200, $cropdata);
		
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
				$imgsize = 960;
				list($width, $height) = getimagesize( $_FILES["file"]["tmp_name"]);
				if($width < 960){
					if($width > $height)
						$imgsize = $width;
					else
						$imgsize = $height;
				}	 			
				$big_nocrop = $this->resizeImageFixpixel($target_big_nocrop_dir.$new_name , $_FILES["file"]["tmp_name"] , $imgsize , 80);
				$big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
				$medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 180, 80);
				$small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 50, 80);
				
				$errorupload = false;
				array_push($isuploadimg,$big_nocrop, $big, $medium, $small);
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
		
		
		$response = array();
		if ( ! empty($_FILES))
		{
			$cropdata = $_POST["json"];
			$cropdata = json_decode($cropdata);
			$img_w = (int)$cropdata->img_w;
			
			$new_name = "cover_".$this->generateRandomString(20).".jpg";
			$target_small_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/cover/small/";
			$target_medium_dir =  UPLOAD_FILE_PATH."/uploadimages/real/place/cover/medium/";
			$target_big_dir =  UPLOAD_FILE_PATH."/uploadimages/real/place/cover/big/";
			$target_big_nocrop_dir =  UPLOAD_FILE_PATH."/uploadimages/real/place/cover/big-nocrop/";
				
		
			$checkdirectory_small = $this->checkDirectory($target_small_dir);
			$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
			$checkdirectory_big = $this->checkDirectory($target_big_dir);
			$checkdirectory_bignocrop = $this->checkDirectory($target_big_nocrop_dir);
			$allowfiletype = $this->allowImageType(array("image/JPG","image/jpg","image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
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
				list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
				if($width < 960){
					
					if($width > $height)
						$big_nocrop = $width;
					else
						$big_nocrop = $height;
				}
				$big_nocrop_source = $this->resizeImageFixpixel($target_big_nocrop_dir.$new_name , $_FILES["file"]["tmp_name"] , $big_nocrop , 80);
				$big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
				/* $small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"],0.2,50); */
				$medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 520, 80);
				$small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 180, 80);
				$errorupload = false;
				array_push($isuploadimg,$big_nocrop_source, $big, $medium, $small);
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
	
	public function uploadEventImage(){
	    $response = array();
	    if ( ! empty($_FILES))
	    {
	        $cropdata = $_POST["json"];
	        $cropdata = json_decode($cropdata);
	        $img_w = (int)$cropdata->img_w;
	        
	        $new_name = "event_".$this->generateRandomString(20).".jpg";
	        $target_small_dir = UPLOAD_FILE_PATH."/uploadimages/real/event/small/";
	        $target_medium_dir =  UPLOAD_FILE_PATH."/uploadimages/real/event/medium/";
	        $target_big_dir =  UPLOAD_FILE_PATH."/uploadimages/real/event/big/";
	        $target_big_nocrop_dir =  UPLOAD_FILE_PATH."/uploadimages/real/event/big-nocrop/";
	        
	        
	        $checkdirectory_small = $this->checkDirectory($target_small_dir);
	        $checkdirectory_medium = $this->checkDirectory($target_medium_dir);
	        $checkdirectory_big = $this->checkDirectory($target_big_dir);
	        $checkdirectory_bignocrop = $this->checkDirectory($target_big_nocrop_dir);
	        $allowfiletype = $this->allowImageType(array("image/JPG","image/jpg","image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
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
	            list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
	            if($width < 960){
	                
	                if($width > $height)
	                    $big_nocrop = $width;
	                    else
	                        $big_nocrop = $height;
	            }
	            $big_nocrop_source = $this->resizeImageFixpixel($target_big_nocrop_dir.$new_name , $_FILES["file"]["tmp_name"] , $big_nocrop , 80);
	            $big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
	            /* $small = $this->resizeImage($target_small_dir.$new_name,$_FILES["file"]["tmp_name"],0.2,50); */
	            $medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 520, 80);
	            $small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 210, 80);
	            $errorupload = false;
	            array_push($isuploadimg,$big_nocrop_source, $big, $medium, $small);
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
	
	public function uploadAdvertImage(){
	    $response = array();
	    if ( ! empty($_FILES))
	    {
	        $cropdata = $_POST["json"];
	        $cropdata = json_decode($cropdata);
	        $img_w = (int)$cropdata->img_w;
	        
	        $new_name = "event_".$this->generateRandomString(20).".jpg";
	      
	        $target_medium_dir =  UPLOAD_FILE_PATH."/uploadimages/real/advertisement/medium/";
	        $target_big_dir =  UPLOAD_FILE_PATH."/uploadimages/real/advertisement/big/";
	      
	
	        $checkdirectory_medium = $this->checkDirectory($target_medium_dir);
	        $checkdirectory_big = $this->checkDirectory($target_big_dir);
	        $allowfiletype = $this->allowImageType(array("image/JPG","image/jpg","image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
	        $allowsize = $this->allowImageSize(10240 , 20000000, $_FILES["file"]["size"]);//20MB
	        //$allowmindimension = $this->allowImageMinimumDimension(500, 300, $_FILES["file"]["tmp_name"]);
	        //$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"]);
	        $allowmincrop = $this->allowImageMinimumDimensionCrop(640, 200, $cropdata);
	        
	        $permission = array();
	        array_push($permission ,
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
	            //$big = $this->resizeImage($target_big_dir.$new_name,$_FILES["file"]["tmp_name"],0.5,50);
	            $big_crop = 960;
	            if($img_w < 960){
	                $big_crop = $img_w;
	            }
	            
	           /* $big_nocrop = 960;
	            list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
	            if($width < 960){
	                
	                if($width > $height)
	                    $big_nocrop = $width;
	                    else
	                        $big_nocrop = $height;
	            }*/
	         
	            $big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);	     
	            $medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 520, 80);
	           
	            $errorupload = false;
	            array_push($isuploadimg, $big, $medium);
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
			
			/* $target_extreme_small_dir = "./uploadimages/shopimages/extreme_small/"; */
		    $target_small_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/small/";
		    $target_medium_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/medium/";
		    $target_big_dir = UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/big/";
			
	
			$reportwrapper = array();
		
			$number_of_files = count($_FILES['file']['name']);		
			for ($i = 0; $i < $number_of_files; $i++){
								
				$report = array();
				$new_name = "detail_".$this->generateRandomString(20).".jpg";
				
				/* $checkdirectory_extreme_small = $this->checkDirectory($target_extreme_small_dir); */
				$checkdirectory_small = $this->checkDirectory($target_small_dir);
				$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
				$checkdirectory_big = $this->checkDirectory($target_big_dir);
				$allowfiletype = $this->allowImageType(array("image/jpeg", "image/gif", "image/png"), $_FILES['file']['type'][$i]);
				$allowsize = $this->allowImageSize(5120 , 20000000, $_FILES["file"]["size"][$i]);//20MB
				$allowmindimension = $this->allowImageMinimumDimension(200, 200, $_FILES["file"]["tmp_name"][$i]);
				$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"][$i]);
				
				$permission = array();
				array_push($permission ,
					/* $checkdirectory_extreme_small, */
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
					
					if($my_img_medium_size > 520){
						$my_img_medium_size = 520;
					}
					
					
					$big = $this->resizeImageFixpixel($target_big_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , $my_img_size, 80);
					$medium = $this->resizeImageFixpixel($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , $my_img_medium_size, 80);
										
					$small = $this->resizeImageFixpixelAndScaleCenter($target_small_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , 180, 80);
				//	$small = $this->resizeImageFixpixel($target_small_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , 180, 80);
				//	$extreme_small = $this->resizeImageFixpixel($target_extreme_small_dir.$new_name, $_FILES["file"]["tmp_name"][$i] , 160, 80);
					
					$errorupload = false;
					array_push($isuploadimg, $big, $medium, $small);
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
			
			$response["is_upload"] = true;
			$response["message"] = "success";
			$response["fileupload"] = $reportwrapper;
		}
		else{
			$response['is_upload']= false;
			$response["message"] = "No File!";
			$response["fileupload"] = null;
		}
				
		$json = json_encode($response);
		echo $json;
		
	}	
	
	
	public function uploadIconImage(){
		
		$response = array();
		if ( ! empty($_FILES))
		{		
			$new_name = "icon_".$this->generateRandomString(20).".jpg";
			$target_dir = UPLOAD_FILE_PATH ."/uploadimages/real/icon/";
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
	
	public function productUploadImage(){

		$response = array();
		if ( ! empty($_FILES))
		{
			$cropdata = $_POST["json"];
			$cropdata = json_decode($cropdata);
			$img_w = (int)$cropdata->img_w;
				
			$new_name = "product_".$this->generateRandomString(20).".jpg";
		//	$target_extreme_small_dir = UPLOAD_FILE_PATH."/uploadimages/product/extreme-small/";
			$target_small_dir = UPLOAD_FILE_PATH ."/uploadimages/real/product/small/";
			$target_medium_dir = UPLOAD_FILE_PATH ."/uploadimages/real/product/medium/";
			$target_big_dir = UPLOAD_FILE_PATH ."/uploadimages/real/product/big/";
			$target_big_nocrop_dir = UPLOAD_FILE_PATH ."/uploadimages/real/product/big-nocrop/";
				
		//	$checkdirectory_extreme_small = $this->checkDirectory($target_extreme_small_dir);
			$checkdirectory_small = $this->checkDirectory($target_small_dir);
			$checkdirectory_medium = $this->checkDirectory($target_medium_dir);
			$checkdirectory_big = $this->checkDirectory($target_big_dir);
			$checkdirectory_bignocrop = $this->checkDirectory($target_big_nocrop_dir);
			
			$allowfiletype = $this->allowImageType(array("image/jpg","image/jpeg", "image/gif", "image/png"), $_FILES['file']['type']);
			$allowsize = $this->allowImageSize(10240 , 20000000, $_FILES["file"]["size"]);//20MB
			//$allowmindimension = $this->allowImageMinimumDimension(500, 300, $_FILES["file"]["tmp_name"]);
			//$allowmaxdimension = $this->allowImageMaximumDimension(8000, 5000, $_FILES["file"]["tmp_name"]);
			$allowmincrop = $this->allowImageMinimumDimensionCrop(200, 200, $cropdata);
		
			$permission = array();
			array_push($permission ,
		//			$checkdirectory_extreme_small,
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
						
				$big_crop = 960;
				if($img_w < 960){
					$big_crop = $img_w;
				}
				$imgsize = 960;
				list($width, $height) = getimagesize( $_FILES["file"]["tmp_name"]);
				if($width < 960){
					$imgsize = $width;
				}
				$big_nocrop = $this->resizeImageFixpixel($target_big_nocrop_dir.$new_name , $_FILES["file"]["tmp_name"] , $imgsize , 80);
				$big = $this->resizeImageFixpixelAndCrop($target_big_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, $big_crop, 80);
				$medium = $this->resizeImageFixpixelAndCrop($target_medium_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 520, 80);
				$small = $this->resizeImageFixpixelAndCrop($target_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 180, 80);
			//	$extreme_small = $this->resizeImageFixpixelAndCrop($target_extreme_small_dir.$new_name, $_FILES["file"]["tmp_name"] , $cropdata, 50, 80);
		
				$errorupload = false;
				array_push($isuploadimg,$big_nocrop, $big, $medium, $small);
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
	
	public function removeProductImage(){
		
		$data['message'] = array();
		$report = array();
		
		if(!$this->input->post('productimage')){
				
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
				
		}
		$productimage = $this->input->post('productimage');
		if(!$productimage){
					
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
			
		}
		
		//$extreme_small = "./uploadimages/product/extreme-small/";
		$small = UPLOAD_FILE_PATH ."/uploadimages/real/product/small/";
		$medium = UPLOAD_FILE_PATH ."/uploadimages/real/product/medium/";
		$big = UPLOAD_FILE_PATH ."/uploadimages/real/product/big/";
		$big_nocrop = UPLOAD_FILE_PATH ."/uploadimages/real/product/big-nocrop/";
		
		if(file_exists($big_nocrop.$productimage)){
			unlink($big_nocrop.$productimage);
			$report['big_nocrop_image_message'] ="File is removed";
		
		}else{
			$report['big_nocrop_image_message'] ="File not found";
		}
		
		if(file_exists($big.$productimage)){
			unlink($big.$productimage);
			$report['big_image_message'] ="File is removed";
				
		}else{
			$report['big_image_message'] ="File not found";
		}
		
		if(file_exists($medium.$productimage)){
			unlink($medium.$productimage);
			$report['medium_image_message'] ="File is removed";
		
		}else{
			$report['medium_image_message'] ="File not found";
		}
		
		if(file_exists($small.$productimage)){
			unlink($small.$productimage);
			$report['small_image_message'] ="File is removed";
		
		}else{
			$report['small_image_message'] ="File not found";
		}
		
		/* if(file_exists($extreme_small.$productimage)){
			unlink($extreme_small.$productimage);
			$report['extreme_small_image_message'] ="File is removed";
		
		}else{
			$report['extreme_small_image_message'] ="File not found";
		} */
		
		array_push($data , $report);
		$json = json_encode($data);
		echo $json;
	}
	public function removeIcon(){
		$iconname = $this->input->post('iconname');		
		$targetfile = UPLOAD_FILE_PATH."/uploadimages/real/icon/".$iconname;
		
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
	
	public function removeEvent(){
	    
	    
	    $IMG_NAME = $this->input->post('IMG_NAME');
	    $targetfile_small = UPLOAD_FILE_PATH."/uploadimages/real/event/small/".$IMG_NAME;
	    $targetfile_medium = UPLOAD_FILE_PATH."/uploadimages/real/event/medium/".$IMG_NAME;
	    $targetfile_big = UPLOAD_FILE_PATH."/uploadimages/real/event/big/".$IMG_NAME;
	    $targetfile_bignocrop = UPLOAD_FILE_PATH."/uploadimages/real/event/big-nocrop/".$IMG_NAME;
	    
	    $response = array();
	    if(file_exists($targetfile_small)){
	        unlink($targetfile_small);
	        $response['message'] ="File is removed";
	   }else{
	        $response['message'] ="File not found";
	    }
	    
	    if(file_exists($targetfile_medium)){
	        unlink($targetfile_medium);
	        $response['message'] ="File is removed";
	    }else{
	        $response['message'] ="File not found";
	    }
	    
	    if(file_exists($targetfile_big)){
	        unlink($targetfile_big);
	        $response['message'] ="File is removed";
	    }else{
	        $response['message'] ="File not found";
	    }
	    
	    if(file_exists($targetfile_bignocrop)){
	        unlink($targetfile_bignocrop);
	        $response['message'] ="File is removed";
	    }else{
	        $response['message'] ="File not found";
	    }
	    
	    $json = json_encode($response);
	    echo $json;
	}
	
	public function removeAdvertisement(){
	    
	    
	    $IMG_NAME = $this->input->post('IMG_NAME');
	 
	    $targetfile_medium = UPLOAD_FILE_PATH."/uploadimages/real/advertisement/medium/".$IMG_NAME;
	    $targetfile_big = UPLOAD_FILE_PATH."/uploadimages/real/advertisement/big/".$IMG_NAME;
	    
	    $response = array();
	   
	    if(file_exists($targetfile_medium)){
	        unlink($targetfile_medium);
	        $response['message'] ="File is removed";
	    }else{
	        $response['message'] ="File not found";
	    }
	    
	    if(file_exists($targetfile_big)){
	        unlink($targetfile_big);
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
		$srcbignocrop = "";
		
		if($removetype == "1"){
		    $srcbig = UPLOAD_FILE_PATH ."/uploadimages/real/place/logo/big/";
		    $srcbignocrop = UPLOAD_FILE_PATH ."/uploadimages/real/place/logo/big-nocrop/";
		    $srcmedium = UPLOAD_FILE_PATH ."/uploadimages/real/place/logo/medium/";
		    $srcsmall = UPLOAD_FILE_PATH ."/uploadimages/real/place/logo/small/";
			
			if(file_exists($srcbignocrop.$imagename)){
				unlink($srcbignocrop.$imagename);
				$report['big_nocrop_image_message'] ="File is removed";
					
			}else{
				$report['big_nocrop_image_message'] ="File not found";
			}
		}else if($removetype == "2"){
		    $srcbig = UPLOAD_FILE_PATH ."/uploadimages/real/place/cover/big/";
		    $srcbignocrop = UPLOAD_FILE_PATH ."/uploadimages/real/place/cover/big-nocrop/";
		    $srcmedium = UPLOAD_FILE_PATH ."/uploadimages/real/place/cover/medium/";
		    $srcsmall = UPLOAD_FILE_PATH ."/uploadimages/real/place/cover/small/";
			
			if(file_exists($srcbignocrop.$imagename)){
				unlink($srcbignocrop.$imagename);
				$report['big_nocrop_image_message'] ="File is removed";
					
			}else{
				$report['big_nocrop_image_message'] ="File not found";
			}
		}else if($removetype == "3"){
			$srcbig = UPLOAD_FILE_PATH ."/uploadimages/real/place/image-detail/big/";
			$srcmedium = UPLOAD_FILE_PATH ."/uploadimages/real/place/image-detail/medium/";
			$srcsmall = UPLOAD_FILE_PATH ."/uploadimages/real/place/image-detail/small/";	
			
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
		    if(file_exists(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/big/".$removedata[$i]["filename"])){
		        unlink(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/big/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/small/".$removedata[$i]["filename"])){
			    unlink(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/small/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/medium/".$removedata[$i]["filename"])){
			    unlink(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/medium/".$removedata[$i]["filename"]);
				$data[$removedata[$i]["filename"]]= "File is removed";
			}else{
				$data[$removedata[$i]["filename"]] = 'File not found';
			}
			if(file_exists(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/extreme-small/".$removedata[$i]["filename"])){
			    unlink(UPLOAD_FILE_PATH."/uploadimages/real/place/image-detail/extreme-small/".$removedata[$i]["filename"]);
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
	
	/*NO IN API AND NOT USE AT ALL*/function resizeImage($targetfolder, $sourcefolder , $resizepixelpercent, $quality){
		
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
		
		$white = imagecolorallocate($image_p,  255, 255, 255);
		imagefilledrectangle($image_p, 0, 0, $width, $height, $white);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		return imagejpeg($image_p, $destination_img, $quality);
		
	}
	
	/*NO IN API*/function resizeImageAndCrop($targetfolder, $sourcefolder ,$cropdata , $resizepixelpercent, $quality){
	
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
		$white = imagecolorallocate($image_p,  255, 255, 255);
		imagefilledrectangle($image_p, 0, 0, $img_w, $img_h, $white);
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
		$white = imagecolorallocate($image_p,  255, 255, 255);
		imagefilledrectangle($image_p, 0, 0, $width, $height, $white);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	/*	imagejpeg($image_p, $destination_img, $quality);
		$bucket='storedernham';
		if($this->s3->putObjectFile($destination_img, $bucket , substr($targetfolder,2), S3::ACL_PUBLIC_READ) ){
			//unlink($destination_img);
			return true;
		}
		return false;*/
		return imagejpeg($image_p, $destination_img, $quality);	
		
	}
	
	/*NO IN API*/function resizeImageFixpixelAndCrop($targetfolder , $sourcefolder, $cropdata , $size , $quality){
	
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
		$white = imagecolorallocate($image_p,  255, 255, 255);
		imagefilledrectangle($image_p, 0, 0, $img_w, $img_h, $white);
		imagecopyresampled($image_p, $image, 0, 0, $img_x, $img_y, $new_width, $new_height, $img_w, $img_h);
	   /* imagejpeg($image_p, $destination_img, $quality);
		$bucket='storedernham';
		if($this->s3->putObjectFile($destination_img, $bucket , substr($targetfolder,2), S3::ACL_PUBLIC_READ) ){
			unlink($destination_img);
			return true;
		}
		return false;*/
	return imagejpeg($image_p, $destination_img, $quality);
	}
	
	function resizeImageFixpixelAndScaleCenter($targetfolder , $sourcefolder , $size , $quality){
	
	
		$source_img = $sourcefolder;
		$destination_img = $targetfolder;
		$info = getimagesize($source_img);
		list($width, $height) = $info;
	
		$img_x = 0;
		$img_y = 0;
		$img_w = $width;
		$img_h = $height;
		
		$new_width = $size;
		$new_height = $size;
		if($width > $height){
	
			/* // the lowest will have size as value
			 $percentzoomheight = ($size * 100)/$height;
			 $convertwidthpx = ($width * $percentzoomheight)/100;
			 $new_width = $convertwidthpx;
			 $new_height = $size; */
	
			$scale_x = ($width - $height);
			$img_x = $scale_x/2;
			$img_w = $width - $scale_x;
	
		}else{
				
			/* $percentzoomwidth = ($size * 100)/$width;
				$convertheightpx = ($height * $percentzoomwidth)/100;
				$new_height = $convertheightpx;
				$new_width = $size; */
			$scale_y = ($height - $width);
			$img_y = $scale_y/2;
			$img_h = $height - $scale_y;
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
			$white = imagecolorallocate($image_p,  255, 255, 255);
			imagefilledrectangle($image_p, 0, 0, $width, $height, $white);
				imagecopyresampled($image_p, $image, 0, 0, $img_x, $img_y, $new_width, $new_height, $img_w, $img_h);
	//	$bucket='storedernham';
	//	if($this->s3->putObjectFile($destination_img, $bucket , substr($targetfolder,2), S3::ACL_PUBLIC_READ) ){
		//unlink($destination_img);
	//	return true;
	//	}
	//	return false;
	return imagejpeg($image_p, $destination_img, $quality);	
	}
	
	
	
	function checkDirectory( $path ){
		
		/*$response = array();
		if(!file_exists($path)){
			$response['message'] = "The uploaded path does not appear to be valid!";
			$response['is_allow'] = false;
		}else{			
			$response['message'] = "";
			$response['is_allow'] = true;
		}
		return $response;*/
		
		$filename= $path;
		$file_headers = @get_headers($filename);
		
		if($file_headers[0] == 'HTTP/1.0 404 Not Found'){
		    $response['message'] = "The uploaded path does not appear to be valid!";
		    $response['is_allow'] = false;
		} else if ($file_headers[0] == 'HTTP/1.0 302 Found' && $file_headers[7] == 'HTTP/1.0 404 Not Found'){
		    
		    $response['message'] = "The uploaded path does not appear to be valid!";
		    $response['is_allow'] = false;
		} else {
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
	
	/*NO IN API*/function allowImageMinimumDimensionCrop($minwidth ,$minheight , $cropdata){
		
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