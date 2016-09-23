<?php
class UserRestController extends  CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("UserModel");
	}
	
	public function index(){
		$this->load->view('index');
	}

	public function listuser(){
		//echo "THIS IS THE SECOND STEP!!!";
		
		$data = $this->UserModel->getAllUser();
		
		$json = json_encode($data);
		echo $json;
		//$this->load->view('haha', $json);
			
	}
	
	public function insertuser(){
		
		
		$check = $this->UserModel->insertUser();
		$data = array();
		if($check){
			$data['error'] = false;
			$data['message'] = 'success!';
		}else{
			$data['error'] = true;
			$data['message'] = 'fail!';
		}
		$json = json_encode($data);
		echo $json;
	}
	
}
?>