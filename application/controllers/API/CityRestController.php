<?php
class CityRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("CityModel");
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getCityCombo($countryid){
		
		$countryid  = urlencode($countryid);
		$data = $this->CityModel->getAllCityByCountry($countryid);
		$json = json_encode($data);
		echo $json;
	}
}

?>