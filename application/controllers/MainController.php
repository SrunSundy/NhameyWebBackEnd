<?php
	class MainController extends  CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		
			$sess_id = $this->session->userdata('admin_id');
			
			if(empty($sess_id)){
				
				$url = $_SERVER['REQUEST_URI'];
				
				$last= explode('/',$url);
				$last_part = end($last);
				if(strcmp($last_part, "login") ){
					redirect('/MainController/login', 'refresh');
					die();
				}
			}
			
			
		}
		
		
		public function index(){
			
			$this->load->view('login');
		}
		
		public function dashboard(){
			$this->load->view('pages/dashboard');
		}
		
		public function category(){
			$this->load->view('pages/category');
		}
		
		public function comment(){
			$this->load->view('pages/comment');
		}
		
		public function event(){
		    $this->load->view('pages/event');
		}
		
		public function advertisement(){
		    $this->load->view('pages/advertisement');
		}
		
		public function post(){
			$this->load->view('pages/post');
		}
		
		public function product(){
			$this->load->view('pages/product');
		}
		
		public function addproduct(){		
			$this->load->view('pages/addproduct');
		}
		
		public function addshop(){			
			$this->load->view('pages/addshop');
		}
		
		public function listshop(){
			$this->load->view('pages/listshop');
		}
		
		public function userinfo(){				
			$this->load->view('pages/userinformation');
		}
		
		public function updateshop_overview($shopid = null){
		    
		    $shopid  = urlencode($shopid);
		    $data["shop_id"] = $shopid;
			$this->load->view('pages/upsh_overview', $data);
		}
		
		public function updateshop_information($shopid = null){
			
			$shopid  = urlencode($shopid);
			$data["shop_id"] = $shopid;
			
			$this->load->view('pages/upsh_information', $data);
		}
		public function updatepro_information($product_id = null){
			
			$product_id  = urlencode($product_id);
			$data["product_id"] = $product_id;
			
			$this->load->view('pages/uppro_information', $data);
		}
		public function updateshop_photo($shopid = null){
			
			$shopid  = urlencode($shopid);
			$data["shop_id"] = $shopid;
			$this->load->view('pages/upsh_photo', $data);
		}
		
		public function updateshop_product($shopid = null){
			
			$shopid  = urlencode($shopid);
			$data["shop_id"] = $shopid;
			$this->load->view('pages/upsh_product', $data);
		}
		public function listProduct(){
			$this->load->view('pages/listproduct');
		}
		public function updateshop_location($shopid = null){
			
			$shopid  = urlencode($shopid);
			$data["shop_id"] = $shopid;
			$this->load->view('pages/upsh_location', $data);
		}
		
		public function updateshop($shopid = null){
			
			$shopid  = urlencode($shopid);
			$this->load->model('ShopModel');
			$response = $this->ShopModel->defaultShopUpdate($shopid);
			if(count($response) <= 0){
				redirect('/MainController/listshop', 'refresh');
			}
			/* $shopid  = urlencode($shopid);
			if(!$shopid){
				$shopid =50;
				 redirect('/MainController/addshop', 'refresh'); 
			}
					
			$data["shopid"] = $shopid;
		 	if(isset($tab)) $this->load->view('pages/upsh_'.$tab , $data);
			else $this->load->view('pages/upsh_overview', $data);  */
			$data["shop_id"] = $shopid;
			$data["shop_name_en"] = $response[0]->shop_name_en;
			$data["shop_name_kh"] = $response[0]->shop_name_kh;
			$data["shop_logo"] = $response[0]->shop_logo;
			$data["shop_cover"] = $response[0]->shop_cover;
			$data["shop_status"] = $response[0]->shop_status;
			$data["is_shop_open"] = $response[0]->is_shop_open;
			$data["time_to_close"] = $response[0]->time_to_close;
			$data["time_to_open"] = $response[0]->time_to_open;
			$data["shop_opening_time"] = $response[0]->shop_opening_time;
			$data["shop_close_time"] = $response[0]->shop_close_time;
			$data["data_complete"] = $response[0]->data_complete;
			$data["number_data_complete"] = $response[0]->number_data_complete;
			$data["must_data_complete"] = $response[0]->must_data_complete;	
			
			$this->load->view('pages/updateshop', $data);
			
		}
		public function updateproduct($product_id = null){
			
			$product_id  = urlencode($product_id);
			$this->load->model('ProductModel');
			$response = $this->ProductModel->getDefaultProduct($product_id);
			if(count($response) <= 0){
				redirect('/MainController/listproduct', 'refresh');
			}
			/* $shopid  = urlencode($shopid);
			if(!$shopid){
				$shopid =50;
				 redirect('/MainController/addshop', 'refresh'); 
			}
					
			$data["shopid"] = $shopid;
		 	if(isset($tab)) $this->load->view('pages/upsh_'.$tab , $data);
			else $this->load->view('pages/upsh_overview', $data);  */
			$data["product_id"] = $product_id;
			$data["shop_name_en"] = $response[0]->pro_name_en;
			$data["shop_name_kh"] = $response[0]->pro_name_kh;
		    $data["shop_logo"] = $response[0]->pro_image;
		/*	$data["shop_cover"] = $response[0]->shop_cover;
			$data["shop_status"] = $response[0]->shop_status;
			$data["is_shop_open"] = $response[0]->is_shop_open;
			$data["time_to_close"] = $response[0]->time_to_close;
			$data["time_to_open"] = $response[0]->time_to_open;
			$data["shop_opening_time"] = $response[0]->shop_opening_time;
			$data["shop_close_time"] = $response[0]->shop_close_time;
			$data["data_complete"] = $response[0]->data_complete;
			$data["number_data_complete"] = $response[0]->number_data_complete;
			$data["must_data_complete"] = $response[0]->must_data_complete;	
		*/
			$this->load->view('pages/updateproduct', $data);
		
			
		}
		public function addshopaddress(){
			$this->load->view('pages/addshopaddress');
		}
		
		public function listshopcountry(){
			$this->load->view('pages/listshopcountry');
		}
		public function sendmessage(){
			$this->load->view('pages/sendmessage');
		}
		public function listshopcity(){
			$this->load->view('pages/listshopcity');
		}
		
		public function listshopdistrict(){
			$this->load->view('pages/listshopdistrict');
		}
		
		public function listshopcommune(){
			$this->load->view('pages/listshopcommune');
		}
				
		public function adduser(){
			$this->load->view('pages/adduser');
		}
		
		public function listuser(){
			$this->load->view('pages/listuser');
		}
		public function listplayer(){
			$this->load->view('pages/listplayer');
		}
		public function listplayerPost(){
			$this->load->view('pages/listPlayerPost');
		}
		public function login(){
			
			$this->load->view('login');
		}
		
		
	}
?>