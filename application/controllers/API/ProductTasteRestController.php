<?php 
class ProductTasteRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('TasteModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	public function listAllTaste(){		
		echo "HI";	
	}	
	
	public function getTasteByNameCombo(){	
	
		$Tastename = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
			$data = $this->TasteModel->getTasteByNameCombo($Tastename , $limit);		
			$json = json_encode($data);		
			echo $json;	
			
	}	
	
	public function insertTaste(){
		
		$tastdata = $this->input->post('tastdata');
		$tastarr = array($tastdata['tast_name'],$tastdata['tast_remark']);
		$data = $this->TasteModel->insertTaste( $tastarr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>