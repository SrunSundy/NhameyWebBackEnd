<?php 
class TagRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('TagModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	public function listAllTags(){		
		$data = $this->TagModel->getAllTags();
		$json = json_encode($data);
		echo $json;
	}	
	
	public function getTagByNameCombo(){	
	
		$tagname = $this->input->get('srchname');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
			$data = $this->TagModel->getTagByNameCombo($tagname , $limit);		
			$json = json_encode($data);		
			echo $json;	
			
	}	
	
	public function insertTag(){
		
		$tag['tagname'] = $this->input->post('tagname');
	
		$data = $this->TagModel->insertTag( $tag );
		$json = json_encode($data);
		echo $json;
		
	}
}
?>