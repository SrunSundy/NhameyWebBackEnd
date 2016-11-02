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
		
		$setting = $this->input->post('display-setting');	
		$response = $this->ShopModel->listShop($setting);
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
				
		$shopdata = $this->input->post('ShopData');	
		$response = $this->ShopModel->insertShop($shopdata);		 
		echo json_encode($response);
			
	}		
	
	public function updateShopField(){
		
		$shopdata = $this->input->post('shopdata');	
		$response = $this->ShopModel->updateShopField($shopdata);
		echo json_encode($response);
	}
}
?>