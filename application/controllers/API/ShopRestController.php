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
		
		$datashop = array(
			$shopdata["branch_id"],$shopdata["country_id"],$shopdata["city_id"],
			$shopdata["district_id"],$shopdata["commune_id"],$shopdata["shop_name_en"],
			$shopdata["shop_name_kh"],$shopdata["shop_logo"],$shopdata["shop_cover"],
			$shopdata[]
		); 		
		echo json_encode($shopdata);	
	}		
}
?>