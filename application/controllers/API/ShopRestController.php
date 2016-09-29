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
		
		/* $datashopdetail["type_1"] = $datashop["shop_logo"];
		$datashopdetail["type_2"] = $datashop["shop_cover"];
		$datashopdetail["type_3"] = count($shopdata["shop_image_detail"]); */
		
	 	
		$response = $this->ShopModel->insertShop($shopdata);
		 
		echo json_encode($response);	
	}		
}
?>