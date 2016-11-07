<?php
class ServeCategoryRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("ServeCategoryModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getServeCategoryByNameCombo(){
		
		$servecategory = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->ServeCategoryModel->getServeCategoryByName( $servecategory , $limit, $status );
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getAllServeCategory(){
		
		$data = $this->ServeCategoryModel->getAllServeCategory();
		$json = json_encode($data);
		echo $json;
	}
	
	public function insertServeCategory(){
	
		$servecategorydata = json_decode($this->input->raw_input_stream,true);
		$servecategorydata = $servecategorydata["ServeCategoryData"];
		
		//$servecategorydata = $this->input->post('ServeCategoryData');
		$servecategoryarr = array(trim($servecategorydata['serve_category_name']), $servecategorydata['serve_category_type'], $servecategorydata['serve_category_icon'] ,$servecategorydata['serve_category_remark']);
		$data = $this->ServeCategoryModel->insertServeCategory( $servecategoryarr );
		$json = json_encode($data);
		echo $json;
	}
	
}

?>