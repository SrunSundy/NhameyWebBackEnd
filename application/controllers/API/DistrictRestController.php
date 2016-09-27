<?php
class DistrictRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("DistrictModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getDistrictCombo($cityid){
		
		$cityid  = urlencode($cityid);
		$data = $this->DistrictModel->getAllDistrictByCity($cityid);
		$json = json_encode($data);
		echo $json;
	}
}

?>