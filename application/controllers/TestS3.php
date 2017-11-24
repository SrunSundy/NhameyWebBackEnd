<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestS3 extends  CI_Controller{
	public function __construct() {
	
		parent::__construct();
	
		
		
	}
	
	
	

	public function index(){
			$this->load->library('s3');
  
			// Create a Bucket
			//var_dump($this->s3->putBucket('storedernham', S3::ACL_PUBLIC_READ));
  
			// List Buckets
		//var_dump($this->s3->listBuckets());
	//$config['upload_path']='admin/';
		//$this->load->library('s3');
	//	var_dump($this->s3->listBuckets());
		// $srcbig = ."/uploadimages/";
		// echo $srcbig ;
	
		$bucket="storedernham";
		$tmp= "./uploadimages/real/place/cover/small/Capture1.PNG";
		$actual_image_name= time()."Thefashion_20160519140857-836489.JPG";
		
		if($this->s3->putObjectFile($tmp, $bucket , $actual_image_name, S3::ACL_PUBLIC_READ) )
		{
			$msg = "S3 Upload Successful.";
			$s3file='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
			echo "<img src='$s3file'/>";
			echo 'S3 File URL:'.$s3file;
		}
		else
			$msg = "S3 Upload Fail.";
		
	}
		

}
?>