<?php
class ShopImageRestController extends CI_Controller{
	
	
	public function __construct() {
	
		parent::__construct();	
		$this->load->model('ShopImageModel');
	
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function listShopImageByShopId(){
		
		$request = json_decode($this->input->raw_input_stream,true);
		if(!isset($request["request_data"])){
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
		}
		
		$request = $request["request_data"];
		
		$logo_count = 0;
		$cover_count = 0;
		$detail_count = 0;
		
		$response_data = $this->ShopImageModel->listShopImageByShopId($request);
		if(count($response_data) >= 0){
			
			$status = (int)$request["sh_img_status"];			
			$shop_id = (int)$request["shop_id"];
			
			$request_count["sh_img_status"] = $status;
			$request_count["shop_id"] = $shop_id;
				
			$this->load->helper('ImageType');
			$request_count["sh_img_type"] = ImageType::Logo;
			$logo_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
				
			$request_count["sh_img_type"] = ImageType::Cover;
			$cover_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
				
			$request_count["sh_img_type"] = ImageType::Detail;
			$detail_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
		}
		
		$response["total_logo"] = $logo_count;
		$response["total_cover"] = $cover_count;
		$response["total_detail"] = $detail_count;
		$response["response_data"] = $response_data;
		
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
		
	}
	
}