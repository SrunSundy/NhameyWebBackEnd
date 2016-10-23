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

	public function getUserByNameCombo(){
		$srchname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		$response = $this->UserModel->getUser($srchname,$limit);
		echo json_encode($response);
	}
	
	public function insertUser(){
		$req_data = $this->input->post('req_data');
		$response = $this->UserModel->insertUser($req_data);
		echo json_encode($response);
	}
	
	public function updateUserAdmin(){
		$req_data = $this->input->post('req_data');
		$response = $this->UserModel->updateUserAdmin($req_data);
		echo json_encode($response);
	}
	
	public function deleteUserAdmin(){
		$req_data = $this->input->post('req_data');
		$response = $this->UserModel->deleteUserAdmin($req_data);
		echo json_encode($response);
	}
	
}
?>