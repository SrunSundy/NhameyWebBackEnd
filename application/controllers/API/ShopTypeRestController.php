<?php
class ShopTypeRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("ShopTypeModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getShopTypeByNameCombo(){
		
		$shoptype = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->ShopTypeModel->getShopTypeByName( $shoptype , $limit, $status );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function insertShopType(){
	
		$shoptypedata = $this->input->post('ShoptypeData');
		$shoptypearr = array($shoptypedata['shop_type_name'],$shoptypedata['shop_type_remark']);
		$data = $this->ShopTypeModel->insertShopType( $shoptypearr );
		$json = json_encode($data);
		echo $json;
	}
	
}

?>