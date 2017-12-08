<?php 
class ShopRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('ShopModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	
	public function listAllShop(){		
		echo "HI";	
	}	
	
	public function listShop(){
		
		$setting = json_decode($this->input->raw_input_stream,true);
		$setting = $setting["display-setting"];
		
		$response = $this->ShopModel->listShop($setting);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}
	
	public function getDefaultUpdateInfo(){
		
		$request = json_decode($this->input->raw_input_stream,true);
		$request = $request["resq_data"];
		
		$response = $this->ShopModel->getDefaultUpdateInfo($request);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
		
	}
	
	public function shopoverviewinfo(){
	    
	    $request = json_decode($this->input->raw_input_stream,true);
	    $request = $request["resq_data"];
	    
	    if($request["shop_id"] == null || !isset($request["shop_id"])){
	              
	        $response["response_code"] = "0000";
	        $response["response_msg"] = "Invalid shop_id";
	        $json = json_encode($response, JSON_PRETTY_PRINT);
	        echo $json;
	        die();
	    }
	    
	    $response = $this->ShopModel->getShopOverviewInfo($request);
	    $json = json_encode($response, JSON_PRETTY_PRINT);
	    echo $json;
	}
	
	
	public function getDefaultUpdateLocation(){
	
		$request = json_decode($this->input->raw_input_stream,true);
		$request = $request["resq_data"];
	
		$response = $this->ShopModel->getDefaultUpdateLocation($request);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	
	}
	public function getCountshop(){

		$response = $this->ShopModel->getCountshop();
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}
	public function getShopNotComplete($shop_id){
		
		$shop_id  = urlencode($shop_id);
		
		$response = $this->ShopModel->getShopNotComplete($shop_id);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
		
	}
	
	public function toggleShop(){
				
		
		$request = json_decode($this->input->raw_input_stream,true);
		$request = $request["resq_data"];	
	    if(!$request){
			$response["is_updated"] = false;
			$response["message"] = "No Data";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			return;
		}
		
		$response = $this->ShopModel->toggleShop($request);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;  
	}
	
	public function getShopByNameCombo(){	
		$shopname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
		if($page == null)
		    $page = 1;
		$data = $this->ShopModel->getshopByNameCombo($shopname , $limit);		
		$json = json_encode($data);		
		echo $json;	
			
	}	
	
	public function getShopByChoice(){
	    
	    $srch_key = $this->input->get('srch_key');
	    $limit = $this->input->get('row');
	    $page = $this->input->get('page');
	    if($limit == null)
	        $limit = 10;
        if($page == null)
            $page = 1;
        
        $request["page"] = $page;
        $request["row"] = $limit;
        $request["srch_key"] = $srch_key;
        $data = $this->ShopModel->listShopChoice($request);
        $json = json_encode($data);
        echo $json;
	            
	}	
	
	public function insertShop(){
				
		$shopdata = json_decode($this->input->raw_input_stream,true);
		$shopdata = $shopdata["ShopData"];
			
		$response = $this->ShopModel->insertShop($shopdata);		 
		echo json_encode($response);
			
	}		
	
	public function updateShopField(){
		
		$shopdata = json_decode($this->input->raw_input_stream,true);
		$shopdata = $shopdata["shopdata"];
		
		//if(!isset($shopdata["type"])) $shopdata["type"] = 1;
		//1.text     2.image
		if($shopdata["type"] == 2){
			$response = $this->ShopModel->updateShopImage($shopdata);			
		}else{
			$response = $this->ShopModel->updateShopField($shopdata);			
		}
		echo json_encode($response);
		
	}
	
	public function updateShopServeCateogry(){
		
		$shopdata = json_decode($this->input->raw_input_stream,true);
		$shopdata = $shopdata["shopdata"];
		
		$response = $this->ShopModel->updateShopServeCategory($shopdata);
		
		echo json_encode($response);
	}
	
	public function updateShopFacility(){
		
		$shopdata = json_decode($this->input->raw_input_stream,true);
		$shopdata = $shopdata["shopdata"];
		
		$response = $this->ShopModel->updateShopFacility($shopdata);
		
		echo json_encode($response);
	}
	
	public function updateShopLocation(){
		
		$response = array();
		$request = json_decode($this->input->raw_input_stream,true);
		
		if(!isset($request["request_data"])){
			$response["is_updated"] = false;
			$response["message"] = "bad request";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		$request = $request["request_data"];
		if(!isset($request["country_id"])){
			$response["is_updated"] = false;
			$response["message"] = "country_id is required!";
				
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		if(!isset($request["city_id"])){
			$response["is_updated"] = false;
			$response["message"] = "city_id is required!";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
			
		}
		
		if(!isset($request["district_id"])){
			$response["is_updated"] = false;
			$response["message"] = "district_id is required!";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
				
		}
		
		if(!isset($request["commune_id"])){
				
			$response["is_updated"] = false;
			$response["message"] = "commune_id is required!";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		if(!isset($request["shop_address"])){
				
			$response["is_updated"] = false;
			$response["message"] = "shop_address is required!";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		if(!isset($request["shop_id"])){
			$response["is_updated"] = false;
			$response["message"] = "shop_id is required!";
			
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
				
		}
		
		$response = $this->ShopModel->updateShopLocation($request);
		echo json_encode($response);
		
	}
	
	public function updateShopStreet(){
		
		$response = array();
		$request = json_decode($this->input->raw_input_stream,true);
		
		if(!isset($request["request_data"])){
			$response["is_updated"] = false;
			$response["message"] = "bad request";
				
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		$request = $request["request_data"];
		if(!isset($request["shop_lat_point"])){
			$response["is_updated"] = false;
			$response["message"] = "shop_lat_point is required!";
		
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		}
		
		if(!isset($request["shop_lng_point"])){
			$response["is_updated"] = false;
			$response["message"] = "shop_lng_point is required!";
				
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
				
		}
		
		if(!isset($request["shop_id"])){
			$response["is_updated"] = false;
			$response["message"] = "shop_id is required!";
				
			echo json_encode($response,  JSON_PRETTY_PRINT);
			die();
		
		}
		
		$response = $this->ShopModel->updateShopStreet($request);
		echo json_encode($response);
	}
	public function updateShopWorkingTime(){
		
		$shopdata = json_decode($this->input->raw_input_stream,true);
		$shopdata = $shopdata["shopdata"];
		
		$response = $this->ShopModel->updateShopWorkingTime($shopdata);
		echo json_encode($response);
		
	}
	public function getAllshop(){
		
		$data = $this->ShopModel->getAllshop();
		$json = json_encode($data);
		echo $json;
	}
}
?>