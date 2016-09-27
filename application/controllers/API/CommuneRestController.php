<?php
class CommuneRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("CommuneModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getCommuneCombo($districtid){
		
		$districtid  = urlencode($districtid);
		$data = $this->CommuneModel->getAllCommuneByDistrict($districtid);
		$json = json_encode($data);
		echo $json;
	}
}

?>