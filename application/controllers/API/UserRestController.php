<?php
class UserRestController extends  CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("UserModel");
		$this->load->library('session');
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
	public function login(){
		$req_data_r= json_decode($this->input->raw_input_stream,true);
		$req_data = $req_data_r['req_data'];
		
		$email = $req_data['email'];
		$password=$req_data['password'];
		//$type=$req_data['type'];
		/* echo json_encode($req_data);
		 return; */
		
		if ($this->UserModel->resolve_user_login($email, $password)) {
			
			$user_id = $this->UserModel->get_user_id_from_email($email);
			$user    = $this->UserModel->get_user($user_id);
			
			// set session user datas
			$_SESSION['admin_id']      = (int)$user->admin_id;
			$_SESSION['admin_email']     = (string)$user->admin_email;
			$_SESSION['logged_in']    = (bool)true;
			$_SESSION['admin_status'] = (bool)$user->admin_status;
			$_SESSION['admin_type'] = (bool)$user->admin_type;
			$_SESSION['sess_id'] =  session_id();
			$ip = $this->getIp();
			$sess_id = $_SESSION['sess_id'];
			$this->UserModel->setSession($_SESSION['admin_id'], $ip, $sess_id);
			$this->UserModel->setLoggedin($_SESSION['admin_id']);
			$response['status']=true;
			echo json_encode($response);
		}else{
			$response['status']=false;
			echo json_encode($response);
		}
		
	}
	
	public function logout(){
		//$req_data_r= json_decode($this->input->raw_input_stream,true);
		//$req_data = $req_data_r['req_data'];
		
		$this->session->sess_destroy();
		$this->session->unset_userdata(array());
		
	}
	
	private function getIp(){
		if( isset( $_SERVER['REMOTE_ADDR'] )){
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		else if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ){
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	
		}else if( isset( $_SERVER['HTTP_VIA'] )){
			$ip = $_SERVER['HTTP_VIA'];
		}
		else{
			$ip = "Unknown" ;
		}
		return $ip;
	}
	
}
?>