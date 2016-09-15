<?php
class BrandRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getAllBrand(){
		
		$data = $this->BrandModel->getAllBrand();		
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getBrandByNameCombo( $brandname , $limit=null ){
		
		if(!isset($limit))
		{
			$limit = 10;
		}
		if($brandname == "all") $brandname = "";
		$data = $this->BrandModel->getBrandByNameCombo($brandname , $limit);
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getBrandById(){
		
	}
	
	public function insertBrand(){
		
		$branddata = $this->input->post('BrandData');
		$brandarr = array($branddata['brand_name'],$branddata['brand_remark']);
		$data = $this->BrandModel->insertBrand( $brandarr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>