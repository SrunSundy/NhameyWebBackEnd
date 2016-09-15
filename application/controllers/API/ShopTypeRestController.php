<?php
class ShopTypeRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getShopTypeByNameCombo( $shoptype , $limit=null ){
		
		if(!isset($limit))
		{
			$limit = 10;
		}
		if($shoptype == "all") $shoptype = "";
		$data = $this->ShopTypeModel->getRegionByNameCombo( $shoptype , $limit );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function insertShopType(){
	
		$shoptypedata = $this->input->post('ShoptypeData');
		$shoptypearr = array($shoptypedata['shop_type_name'],$shoptypedata['shop_type_remark']);
		$data = $this->ShopTypeModel->insertRegion( $shoptypearr );
		$json = json_encode($data);
		echo $json;
	}
	
}

?>