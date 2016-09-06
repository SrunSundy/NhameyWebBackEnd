<?php
class UserRestController extends  CI_Controller{

	public function index(){
		$this->load->view('index');
	}

	public function listuser(){
		//echo "THIS IS THE SECOND STEP!!!";
		$this->load->model('UserModel');
		$data = $this->UserModel->getAllUser();
		
		$json = json_encode($data);
		echo $json;
		//$this->load->view('haha', $json);
			
	}
	
	public function insertuser(){
		
		$this->load->model('UserModel');
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