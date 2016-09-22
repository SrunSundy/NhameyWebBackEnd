<?php
class ShopTypeRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getShopTypeByNameCombo( $shoptype , $limit=null ){
		
		$shoptype = urldecode($shoptype);
		$limit = urldecode($limit);
		
		if(!isset($limit))
		{
			$limit = 10;
		}
		if($shoptype == "all") $shoptype = "";
		$data = $this->ShopTypeModel->getShopTypeByNameCombo( $shoptype , $limit );
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