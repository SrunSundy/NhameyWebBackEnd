<?php
class CuisineRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("CuisineModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getCuisineByNameCombo(){
		
		$cuisine = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}
		
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