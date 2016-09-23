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
	
	public function getShopByNameCombo( $shopname , $limit=null ){	
	
	if(!isset($limit))	
		$limit = 10;		
		$shopname = urldecode($shopname);				
		if($shopname == "all") $shopname = "";	
		
			$data = $this->ShopModel->getshopByNameCombo($shopname , $limit);		
			$json = json_encode($data);		
			echo $json;	
			
	}	
	
	public function insertShop(){		
		$shopdata = $this->input->post('ShopData');				
		echo json_encode($shopdata["shop_social_media"]["facebook"]);	
	}		
}
?>