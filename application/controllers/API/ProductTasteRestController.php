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
	
	public function getTasteByNameCombo( $Tastename , $limit=null ){	
	
	if(!isset($limit))	
		$limit = 10;		
		$Tastename = urldecode($Tastename);				
		if($Tastename == "all") 
			$Tastename = "";	
		
			$data = $this->TasteModel->getTasteByNameCombo($Tastename , $limit);		
			$json = json_encode($data);		
			echo $json;	
			
	}	
	
	public function insertTaste(){
		
		$branddata = $this->input->post('tastedata');
		$brandarr = array($branddata['taste_name'],$branddata['taste_remark']);
		$data = $this->TasteModel->insertTaste( $brandarr );
		$json = json_encode($data); 
		echo $json;
	}
}
?>