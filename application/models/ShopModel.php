<?php

class ShopModel extends CI_Model{

	public function getshopByNameCombo($shopname , $limit){

		

		$sql = "SELECT shop_id,shop_name_en,shop_remark FROM nham_shop

				WHERE shop_name_en LIKE ? AND shop_status=1 

				ORDER BY shop_id DESC 

				limit ?";

		$shopname = "%".$shopname."%";

		$limit = (int)$limit;

		$query = $this->db->query($sql, array($shopname, $limit) );

		$data = $query->result();

		return $data;

		

	}
	
	public function listShop(){
		
		//TODO: update this query when it's a bigger app
		$sql = "SELECT sh.shop_id,
					TRIM(COALESCE(sh.shop_logo,'')) shop_logo,
					sh.shop_name_en,
					sh.shop_name_kh,
					sh.shop_opening_time,
					sh.shop_close_time,
					sh.shop_serve_type,
					sh.shop_created_date,
					sh.shop_address,
					sh.shop_view_count,
					sh.shop_remark,
					sh.shop_status,
					sh.shop_time_zone,
					ad.admin_id,
					ad.admin_name
		
				FROM nham_shop sh
				LEFT JOIN nham_admin ad ON sh.admin_id = ad.admin_id ";
		
		$query = $this->db->query($sql);
		
		$response = $query->result();
		foreach($response as $item){	
			
			$now = new DateTime($item->shop_time_zone);
			$now = strtotime($now->format('H:i:s'));
			
			$is_open = 0;
			$time_to_close = 0;
			$time_to_open = 0;
		
			
			if(strtotime($item->shop_opening_time) < $now && strtotime($item->shop_close_time) > $now){
				$is_open = 1;
				$time_to_close = $this->substractCurrentTime($item->shop_time_zone, $item->shop_close_time);
			}
			
			if(strtotime($item->shop_opening_time) > $now){
				$time_to_open = $this->substractCurrentTime($item->shop_time_zone, $item->shop_opening_time);
			}else{
				$subfulltime = $this->substractCurrentTime($item->shop_time_zone, "24:00:00");
				$subzerotime = $this->substractTime($item->shop_opening_time, "00:00:00");
				$time_to_open = $this->addTime($subfulltime , $subzerotime);
			}
			
		
			$item->is_shop_open = $is_open;	
			$item->time_to_close = $time_to_close;
			$item->time_to_open = $time_to_open;
		} 
		
		return $response;
	}
	
	 function substractCurrentTime($timezone , $value){
		
		$now =new DateTime($timezone);
		$now =  $now->format('H:i:s');
		$now = new DateTime($now);
		
		$shoptime = new DateTime($value);
		$interval = $shoptime->diff($now);
		return $interval->format('%H:%I:%S');
		
	} 
	function substractTime($value1 , $value2){
	
		$shoptime1 = new DateTime($value1);
		$shoptime2 = new DateTime($value2);
		$interval = $shoptime2->diff($shoptime1);
		return $interval->format('%H:%I:%S');
	
	}
	
	function addTime($value1 , $value2){
	
	
		$interval = strtotime($value1)+strtotime($value2);
		return $interval;
	
	}
	
	public function insertShop( $shopdata ){
		$this->db->trans_begin();
		
		$datashop = $shopdata["datashop"];
		$response = array();
		
		$validate = $this->validateInput($shopdata);
		
		if($this->IsNullOrEmptyString($validate)){
			
			$shopmapadd = json_encode($datashop["shop_map_address"]);
			$shopmedia = json_encode($datashop["shop_social_media"]);
			
			/* $shopsql = "INSERT INTO nham_shop(branch_id, cate_id, country_id, city_id, district_id, commune_id, shop_name_en, shop_name_kh,
		      shop_logo, shop_cover, shop_serve_type, shop_short_description, shop_description,
		      shop_address, shop_phone, shop_email, shop_working_day, shop_opening_time, shop_close_time, shop_has_wifi,
		      shop_has_aircon, shop_has_reservation, shop_has_bikepark, shop_has_tax, shop_map_address, shop_social_media,
		      shop_remark, admin_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) "; */
			
			$shopsql = "INSERT INTO nham_shop(branch_id, cate_id, country_id, city_id, district_id, commune_id, shop_name_en, shop_name_kh,
		      shop_logo, shop_cover, shop_serve_type, shop_short_description, shop_description,
		      shop_address, shop_phone, shop_email, shop_working_day, shop_opening_time, shop_close_time, 
		      shop_map_address, shop_social_media,shop_remark,shop_time_zone, admin_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";

			$shopparams = array( (int)$datashop["branch_id"], 1, (int)$datashop["country_id"],
					(int)$datashop["city_id"], (int)$datashop["district_id"], (int)$datashop["commune_id"],
					$datashop["shop_name_en"], $datashop["shop_name_kh"], $datashop["shop_logo"],
					$datashop["shop_cover"], $datashop["shop_serve_type"], $datashop["shop_short_description"],
				    $datashop["shop_description"], $datashop["shop_address"], $datashop["shop_phone"], 
					$datashop["shop_email"], $datashop["shop_working_day"], $datashop["shop_opening_time"], 
					$datashop["shop_close_time"], $shopmapadd, $shopmedia, $datashop["shop_remark"], $datashop["shop_time_zone"], 1);
			
			$query = $this->db->query($shopsql , $shopparams);
			$insert_shop_id = $this->db->insert_id();
			
			if($this->IsNullOrEmptyString($insert_shop_id)){
				$response["is_insert"] = false;
				$response["message"] = "Invalid SHOP_ID!";
				return $response;
			}
			$servecategories = array();			
			$shopdata["serve_categories"] = array_unique($shopdata["serve_categories"]);
			for($i=0; $i< count($shopdata["serve_categories"]); $i++){
				
				$cateitem["serve_category_id"] = $shopdata["serve_categories"][$i];
				$cateitem["shop_id"] = $insert_shop_id;
				array_push($servecategories , $cateitem);
			}
			$this->db->insert_batch('nham_serve_cate_map_shop', $servecategories);
			
			if(isset($shopdata["shop_facilities"]) ){
				$shopfacilities = array();
				$shopdata["shop_facilities"] = array_unique($shopdata["shop_facilities"]);
				for($i=0; $i< count($shopdata["shop_facilities"]); $i++){
					
					$facilityitem["sh_facility_id"] = $shopdata["shop_facilities"][$i];
					$facilityitem["shop_id"] = $insert_shop_id;
					array_push($shopfacilities , $facilityitem);				
				}
				$this->db->insert_batch('nham_shop_facility_map', $shopfacilities);
			}
						
			$shopimg = array();
			$display_img_order = 1;
			
			if(!$this->IsNullOrEmptyString($datashop["shop_logo"])){
				$shopitemlogo["sh_img_name"] = $datashop["shop_logo"];
				$shopitemlogo["sh_img_remark"] = $datashop["logo_description"];
				$shopitemlogo["sh_img_type"] = 1;
				$shopitemlogo["shop_id"] = $insert_shop_id;
				$shopitemlogo["sh_img_dis_order"] = $display_img_order;
				array_push($shopimg , $shopitemlogo);
			}else{
				$display_img_order--;
			}

			if(!$this->IsNullOrEmptyString($datashop["shop_cover"])){
				$display_img_order++;
				$shopitemcover["sh_img_name"] = $datashop["shop_cover"];
				$shopitemcover["sh_img_remark"] = $datashop["cover_description"];
				$shopitemcover["sh_img_type"] = 2;
				$shopitemcover["shop_id"] = $insert_shop_id;
				$shopitemcover["sh_img_dis_order"] = $display_img_order;
				array_push($shopimg , $shopitemcover);
			}else{
				$display_img_order--;
			}

			if(isset($shopdata["shop_image_detail"])){
				$display_img_order++;
				for($i=0; $i< count($shopdata["shop_image_detail"]); $i++){
					$shopitem["sh_img_name"] = $shopdata["shop_image_detail"][$i]["sh_img_name"];
					$shopitem["sh_img_remark"] = $shopdata["shop_image_detail"][$i]["sh_img_remark"];
					$shopitem["sh_img_type"] = 3;
					$shopitem["shop_id"] = $insert_shop_id;
					$shopitem["sh_img_dis_order"] = $i+$display_img_order;
					array_push($shopimg , $shopitem);
				}
			}
			
			if(count($shopimg) > 0){
				$this->db->insert_batch('nham_shop_image', $shopimg);
			}
							
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				$response["is_insert"] = false;
				$response["message"] = "Transaction rollback!";
			}
			else
			{
				$this->db->trans_commit();
				$response["is_insert"] = true;
				$response["message"] = "success";
			}
			
			return $response;
			
		}else{
			$response["is_insert"] = false;
			$response["message"] = $validate;
		}
		
		return $response;
	}
	
	public function updateShopField( $shopdata ){
		
		$response = array();
		
		$param = $shopdata["param"];
		$value = $shopdata["updated_value"];
		$shopid = $shopdata["shop_id"];
		
		if($this->IsNullOrEmptyString($param)){
			$response["is_updated"] = false;
			$response["message"] = "PARAM is invalid";
			return $response;
		}
		if($this->IsNullOrEmptyString($value)){
			$response["is_updated"] = false;
			$response["message"] = "UPDATED_VALUE is invalid";
			return $response;
		}
		if($this->IsNullOrEmptyString($shopid)){
			$response["is_updated"] = false;
			$response["message"] = "SHOP_ID is invalid";
			return $response;
		}
		$updatedata = array($value , (int)$shopid);
		$sql = "UPDATE nham_shop SET ".trim($param)." = ? WHERE shop_id = ?";
		$query = $this->db->query($sql , $updatedata);
		
		if($this->db->affected_rows() >=0){
			$response["is_updated"] = true;
			$response["message"] = "update successfully!";
		}else{
			$response["is_updated"] = false;
			$response["message"] = "update error!";
		}
		return $response;
	}
	
	function validateInput($shopdata){
		
		$datashop = $shopdata["datashop"];
		if($this->IsNullOrEmptyString($datashop["branch_id"])){
			return "Invalid BRANCH_ID!";
		}
		if($this->IsNullOrEmptyString($datashop["shop_name_en"])){
			return "Invalid SHOP_NAME_EN";
		}
		
		if(!isset($shopdata["serve_categories"]) ){
			return "Invalid SERVE_CATEGORY";
		}
		/* if($this->IsNullOrEmptyString($datashop["serve_category_id"])){
			return "Invalid SERVE_CATEGORY_ID)";
		} */
		if($this->IsNullOrEmptyString($datashop["country_id"])){
			return "Invalid COUNTRY_ID";
		}
		if($this->IsNullOrEmptyString($datashop["city_id"])){
			return "Invalid CITY_ID";
		}
		if($this->IsNullOrEmptyString($datashop["district_id"])){
			return "Invalid DISTRICT_ID";
		}
		if($this->IsNullOrEmptyString($datashop["commune_id"])){
			return "Invalid COMMUNE_ID";
		}
		if($this->IsNullOrEmptyString($datashop["shop_address"])){
			return "Invalid SHOP_ADDRESS";
		}
		if($this->IsNullOrEmptyString($datashop["shop_map_address"]["lat"]) 
			|| $this->IsNullOrEmptyString($datashop["shop_map_address"]["lng"]) ){
			return "Invalid SHOP_MAP_ADDRESS";
		}
		return "";
		
	}
	
	function IsNullOrEmptyString($variable){
		return (!isset($variable) || trim($variable)==='');
	}

}

?>