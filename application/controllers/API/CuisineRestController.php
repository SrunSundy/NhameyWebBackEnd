<?php
class CuisineRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getCuisineByNameCombo( $cuisine , $limit=null ){
		
		$cuisine = urldecode($cuisine);
		$limit = urldecode($limit);
		
		if(!isset($limit))
		{
			$limit = 10;
		}
		if($cuisine == "all") $cuisine = "";
		$data = $this->CuisineModel->getCuisineByNameCombo( $cuisine , $limit );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function insertCuisine(){
		
		$cuisinedata = $this->input->post('CuisineData');
		$cuisinearr = array($cuisinedata['cuisine_name'],$cuisinedata['cuisine_remark']);
		$data = $this->CuisineModel->insertCuisine( $cuisinearr );
		$json = json_encode($data);
		echo $json;
	}
}
?>