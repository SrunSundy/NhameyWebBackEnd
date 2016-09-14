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
	
	public function getBrandByName( $brandname ){
		
		if($brandname == "all") $brandname = "";
		$data = $this->BrandModel->getBrandByName($brandname);
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getBrandById(){
		
	}
}
?>