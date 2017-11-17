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
		
		if(!isset($request["row"]) || $request["row"] <= 0) $request["row"] = 16;
		if(!isset($request["page"]) || $request["page"] <= 0) $request["page"] = 1;
		
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
			$request_count["start_date_srch"] = $request["start_date_srch"];
			$request_count["end_date_srch"] = $request["end_date_srch"];
				
			$this->load->helper('imagetype');
			$request_count["sh_img_type"] = imagetype::Logo;
			$logo_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
				
			$request_count["sh_img_type"] = imagetype::Cover;
			$cover_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
				
			$request_count["sh_img_type"] = imagetype::Detail;
			$detail_count = $this->ShopImageModel->countShopImageByImgtypeAndShopId($request_count);
		}
		
		$response["total_logo"] = $logo_count;
		$response["total_cover"] = $cover_count;
		$response["total_detail"] = $detail_count;
		
		$this->load->helper('calculator');
		$response["total_cover_page"] = calculatePage($cover_count, $request["row"]);
		$response["total_logo_page"] = calculatePage($logo_count, $request["row"]);
		$response["total_detail_page"] = calculatePage($detail_count, $request["row"]);
		$response["response_data"] = $response_data;
		
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
		
	}
	
	public function updateShopImageIsFontShow(){
		
		$request = json_decode($this->input->raw_input_stream,true);
		if(!isset($request["request_data"])){
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
		}
		if(!isset($request["request_data"]["shop_id"]) || $request["request_data"]["shop_id"] == ""){
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
		}			
		$response = $this->ShopImageModel->updateShopImageField($request["request_data"]);	
		
		if($response["is_updated"]){	
			$this->load->model('ShopModel');
			
			$shopdata["shop_id"] = $request["request_data"]["shop_id"];
			$shopdata["param"] = "shop_has_detail_img";
						
			if($this->ShopImageModel->checkIfFrontShow($request["request_data"]) >= 1){
				$shopdata["updated_value"] = 1;
				$this->ShopModel->updateShopField($shopdata);
			}else{
				$shopdata["updated_value"] = 0;
				$this->ShopModel->updateShopField($shopdata);
			}
		}
		echo json_encode($response);
	}
	
	public function updateShopImageField(){
		
		$request = json_decode($this->input->raw_input_stream,true);
		if(!isset($request["request_data"])){
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
		}
		$response = $this->ShopImageModel->updateShopImageField($request["request_data"]);
		echo json_encode($response);
	}
	
	public function deleteShopImage(){
		
		$request = json_decode($this->input->raw_input_stream,true);
		if(!isset($request["request_data"])){
			$response["response_code"] = "400";
			$response["response_msg"] = "bad request";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			die;
		}
		
		$response = array();
		$image_type = (int)$request["request_data"]["image_type"];
		
		$this->load->helper('imagetype');
		if($image_type == imagetype::Logo || $image_type == imagetype::Cover){
			$this->load->model('ShopModel');
			$coverlogo = $this->ShopModel->getCurrentLogoAndCover($request["request_data"]["shop_id"]);
			
			$cover = $coverlogo[0]->shop_logo;
			$logo = $coverlogo[0]->shop_cover;
			
			if(trim($cover) == trim($request["request_data"]["image_name"]) || 
					trim($logo) == trim($request["request_data"]["image_name"]) ){
				$response["is_deleted"] = false;
				$textimg = "";
				if($image_type ==  imagetype::Logo) $textimg = "logo";
				if( $image_type == imagetype::Cover) $textimg = "cover";
				$response["message"] = "This photo is currently used as shop's $textimg!";
				$json = json_encode($response, JSON_PRETTY_PRINT);
				echo $json;
				die;
			}
			
		}
		
		if($this->ShopImageModel->deleteShopImage($request["request_data"]["sh_img_id"])){
			$response["is_deleted"] = true;
			$response["message"] = "Delete successfully!";
		}else{
			$response["is_deleted"] = false;
			$response["message"] = "Delete fail!";
		}
		echo json_encode($response);
		
	}
	
	public function insertshopimage(){
	    
	    $request = json_decode($this->input->raw_input_stream,true);
	    if(!isset($request["request_data"])){
	        $response["response_code"] = "400";
	        $response["response_msg"] = "bad request";
	        $json = json_encode($response, JSON_PRETTY_PRINT);
	        echo $json;
	        die;
	    }
	    $response = array();
	    $request = $request["request_data"];
	    
	    $status = $this->ShopImageModel->insertShopImage($request);
	    if($status){
	        $response["is_inserted"] = $status;
	        $response["message"] = "Insert successfully!";
	    }else{
	        $response["is_inserted"] = $status;
	        $response["message"] = "fail to add";
	    }
	    echo json_encode($response);
	}
	
	
	
}