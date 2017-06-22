<?php 
class PlayerPostRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('PlayerPostModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	public function hi(){
		echo "hi";
	}		
	
	public function listPlayerPost(){
		
		$setting = json_decode($this->input->raw_input_stream,true);
		$setting = $setting["display-setting"];
		
		$response = $this->PlayerPostModel->listPlayerPost($setting);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}



	
	public function togglePlayerPost(){
				
		
		$request = json_decode($this->input->raw_input_stream,true);
		$request = $request["resq_data"];	
	    if(!$request){
			$response["is_updated"] = false;
			$response["message"] = "No Data";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			return;
		}
		
		$response = $this->PlayerPostModel->togglePlayerPost($request);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;  
	}
	

	

	



}
?>