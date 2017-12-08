<?php 
class PlayerRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('PlayerModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	
	public function listAllShop(){		
		echo "HI";	
	}	
	
	public function listPlayer(){
		
		$setting = json_decode($this->input->raw_input_stream,true);
		$setting = $setting["display-setting"];
		
		$response = $this->PlayerModel->listPlayer($setting);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}

    public function getCountPlayer(){

		$response = $this->PlayerModel->getCountPlayer();
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;
	}

	
	public function togglePlayer(){
				
		
		$request = json_decode($this->input->raw_input_stream,true);
		$request = $request["resq_data"];	
	    if(!$request){
			$response["is_updated"] = false;
			$response["message"] = "No Data";
			$json = json_encode($response, JSON_PRETTY_PRINT);
			echo $json;
			return;
		}
		
		$response = $this->PlayerModel->togglePlayer($request);
		$json = json_encode($response, JSON_PRETTY_PRINT);
		echo $json;  
	}
	

	

	



}
?>