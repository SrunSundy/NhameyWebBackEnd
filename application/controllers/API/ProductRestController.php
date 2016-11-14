<?php 
class ProductRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('ProductModel');
		$this->load->model('ShopModel');
	}
	public function index(){
		$this->load->view('index');
	}	
	public function listAllShop(){		
		echo "HI";	
	}	
	

	public function insertProduct(){
			
		$shop_id = $this->input->post('shop_id');
		$pro_name_en = $this->input->post('product_engname');
		$pro_name_kh = $this->input->post('product_khname');
		$taste_id  = $this->input->post('tast_id');
		
		$pro_serve_type=$this->input->post('pro_servertype');
		$pro_price=$this->input->post('price');
		$pro_promote_price=$this->input->post('promote_price');
		$pro_image=$this->input->post('pro_logo');
		$pro_short_description=$this->input->post('productshortdes');
		$pro_description=$this->input->post('productdes');
		$pro_remark=$this->input->post('proremark');
		$data=$this->getSomeShopInfo($shop_id);
		foreach ($data as $shop){
			$shop_name_en=$shop->shop_name_en;
			$shop_name_kh=$shop->shop_name_kh;
			$country_id=$shop->country_id;
			$city_id=$shop->city_id;
			$district_id=$shop->district_id;
			$commune_id=$shop->commune_id;
			$pro_map_address=$shop->shop_map_address;
		}
		$datapro=array("shop_id"=>$shop_id,"shop_name_en"=>$shop_name_en,"shop_name_kh"=>$shop_name_kh,
				"pro_name_en"=>$pro_name_en,"pro_name_kh"=>$pro_name_kh,"country_id"=>$country_id,"city_id"=>$city_id,"district_id"=>$district_id,
				"commune_id"=>$commune_id,"taste_id"=>$taste_id,"pro_map_address"=>$pro_map_address,
				"pro_serve_type"=>$pro_serve_type,"pro_price"=>$pro_price,"pro_promote_price"=>$pro_promote_price,
				"pro_image"=>$pro_image,"pro_short_description"=>$pro_short_description,"pro_description"=>$pro_description,"pro_remark"=>$pro_remark);
		$pro_servertype = $this->input->post('serve_categories');
		$tags=$this->input->post('tags');
		$response = $this->ProductModel->insertProduct($datapro,$pro_servertype,$tags);	
		echo json_encode($response);

	}		
	private function getSomeShopInfo($id){
		
		$data=$this->ShopModel->getSomeShopInfo($id);
		return $data;
	}

}
?>