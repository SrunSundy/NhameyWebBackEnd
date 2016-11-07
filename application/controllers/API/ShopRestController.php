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
			$data = $this->ShopModel->getshopByNameCombo($shopname , $limit);		
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
		echo json_encode($shopdata);
		
	}
}
?>