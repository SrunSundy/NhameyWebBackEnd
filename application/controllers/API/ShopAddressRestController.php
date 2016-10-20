<?php 
class ShopAddressRestController extends CI_Controller{	
	public function __construct() {
		
		parent::__construct();

		$this->load->model('ShopAddressModel');
		
	}
	public function index(){
		$this->load->view('index');
	}	
	

	public function getShopAddressByNameCombo(){
		$address_type = $this->input->get('address_type');
		$srchname = $this->input->get('srchname');
		$parent_id = $this->input->get('parent_id');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
			$data = $this->ShopAddressModel->getShopAddressByNameCombo($address_type, $srchname, $parent_id, $limit);
			$json = json_encode($data);
			echo $json;	
	}
	
	public function insertShopAddress(){
		$req_data = $this->input->post('req_data');
		$response = $this->ShopAddressModel->insertShopAddress($req_data);
		echo json_encode($response);
	}
	
	public function updateShopAddress(){
		$req_data = $this->input->post('req_data');
		$response = $this->ShopAddressModel->updateShopAddress($req_data);
		echo json_encode($response);
	}
	
	public function getListShopAddressByNameCombo(){
		$address_type = $this->input->get('address_type');
		$srchname = $this->input->get('srchname');
		$parent_id = $this->input->get('parent_id');
		$limit = $this->input->get('limit');
		if($limit == null)
			$limit = 10;
			$data = $this->ShopAddressModel->getListShopAddressByNameCombo($address_type, $srchname, $parent_id, $limit);
			$json = json_encode($data);
			echo $json;
	}
}
?>