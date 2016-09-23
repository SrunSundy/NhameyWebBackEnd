<?php
class BrandRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("BrandModel");			
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getAllBrand(){
		$this->load->model("BrandModel");
		$data = $this->BrandModel->getAllBrand();		
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getBrandByNameCombo(){
		
		$brandname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}				
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