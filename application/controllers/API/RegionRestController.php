<?php
class RegionRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getRegionByNameCombo( $region , $limit=null ){
		
		if(!isset($limit))
		{
			$limit = 10;
		}
		if($region == "all") $region = "";
		$data = $this->RegionModel->getRegionByNameCombo( $region , $limit );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function insertRegion(){
		
		$regiondata = $this->input->post('RegionData');
		$regionarr = array($regiondata['region_name'],$regiondata['region_remark']);
		$data = $this->RegionModel->insertRegion( $regionarr );
		$json = json_encode($data);
		echo $json;
	}
}
?>