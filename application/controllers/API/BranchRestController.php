<?php
class BranchRestController extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("BranchModel");			
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	public function getAllBranch(){
		
		$data = $this->BranchModel->getAllBranch();
		$json = json_encode($data);
		echo $json;
	}
	
	public function getBranchByNameCombo(){
		
		$branchname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
		{
			$limit = 10;
		}	
		$status["statusA"] = 1;
		$status["statusB"] = 1;
		$data = $this->BranchModel->getBranchByName($branchname , $limit , $status);
		$json = json_encode($data);
		echo $json;
		
	}
	
	public function getBranchById(){
		$tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
		
		print_r(json_encode($tzlist));
	}
	
	public function insertBranch(){
		
		$branchdata = $this->input->post('BranchData');
		$brancharr = array($branchdata['branch_name'],$branchdata['branch_remark']);
		$data = $this->BranchModel->insertBranch( $brancharr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>