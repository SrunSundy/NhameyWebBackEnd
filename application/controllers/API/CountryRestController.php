<?php
class CountryRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("CountryModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getAllCountry(){
		
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->CountryModel->getAllCountry($status);
		$json = json_encode($data);
		echo $json;
		
	}
}

?>