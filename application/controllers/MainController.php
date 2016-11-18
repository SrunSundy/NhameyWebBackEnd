<?php
	class MainController extends  CI_Controller{
		
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
		
		public function updateshop_overview(){
			$this->load->view('pages/upsh_overview');
		}
		
		public function updateshop_information($shopid = null){
			
			$shopid  = urlencode($shopid);
			$data["shop_id"] = $shopid;
			
			$this->load->view('pages/upsh_information', $data);
		}
		
		public function updateshop_photo(){
			$this->load->view('pages/upsh_photo');
		}
		
		public function updateshop_product(){
			$this->load->view('pages/upsh_product');
		}
		
		public function updateshop_location(){
			$this->load->view('pages/upsh_location');
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
			
			$this->load->view('pages/updateshop', $data);
			
		}
		
		public function addshopaddress(){
			$this->load->view('pages/addshopaddress');
		}
		
		public function listshopcountry(){
			$this->load->view('pages/listshopcountry');
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
		
		public function login(){
			$this->load->view('login');
		}
		
		
	}
?>