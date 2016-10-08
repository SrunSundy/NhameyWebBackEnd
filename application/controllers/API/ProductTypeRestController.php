<?php 
class ProductTypeRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('ProductTypeModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	

	
	public function getTypeByNameCombo(){	
	
		$Tastename = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
			$data = $this->ProductTypeModel->getTypeByNameCombo($Tastename , $limit);		
			$json = json_encode($data);		
			echo $json;	
			
	}	
	
	public function insertType(){
		
		$typedata = $this->input->post('tastedata');
		$typearr = array($typedata['type_name'],$typedata['type_remark']);
		$data = $this->ProductTypeModel->insertType( $typearr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>