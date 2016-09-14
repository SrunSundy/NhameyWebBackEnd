<?php
class ShopRestController extends CI_Controller{
	
	public function index(){
		$this->load->view('index');
	}
	
	public function listAllShop(){
		
		
	}
	
	public function insertShop(){
		$shopdata = $this->input->post('ShopData');
		
		echo json_encode($shopdata["shop_social_media"]["facebook"]);
	}
		
}

?>
