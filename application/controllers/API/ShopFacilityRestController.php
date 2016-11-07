<?php
class ShopFacilityRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("ShopFacilityModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getShopFacilityByNameCombo(){
		
		$shopfacility = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->ShopFacilityModel->getShopFacilityByName( $shopfacility , $limit, $status );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getAllShopFacility(){
		
		$data = $this->ShopFacilityModel->getAllShopFacility();
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function insertShopFacility(){
	
		$shopfacilitydata = json_decode($this->input->raw_input_stream,true);
		$shopfacilitydata = $shopfacilitydata["ShopFacilityData"];
		
		$shopfacilityarr = array(trim($shopfacilitydata['sh_facility_name']), $shopfacilitydata['sh_facility_icon'] ,$shopfacilitydata['sh_facility_remark']);
		$data = $this->ShopFacilityModel->insertShopFacility( $shopfacilityarr );
		$json = json_encode($data);
		echo $json;
	}
	
}

?>