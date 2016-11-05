<?php

class ShopAddressModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function insertShopAddress($req_data){
		//$this->db->trans_begin();
		$address_type = $req_data["address_type"];
		$data_name = $req_data["data_name"];
		$parent_id = $req_data["parent_id"];
		$admin_id = $req_data["admin_id"];
		$response = array();
		$validate = $this->validateInput($address_type);
		$validate2 = $this->validateInput($data_name);
		$validate3 = $this->validateInput($parent_id);
		$validate4 = $this->validateInput($admin_id);
	
		if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2) && $this->IsNullOrEmptyString($validate3) && $this->IsNullOrEmptyString($validate4)){
			if($address_type=='country'){
				$strsql = "INSERT INTO nham_country(country_name, admin_id, country_status) VALUES (?,?,?) ";
				$params = array($data_name, $admin_id, 1);
			}else if($address_type=='city'){	
				$strsql = "INSERT INTO nham_city(city_name, country_id, admin_id, city_status) VALUES (?,?,?,?) ";
				$params = array($data_name, $parent_id, $admin_id, 1);
			}else if($address_type=='district'){	
				$strsql = "INSERT INTO nham_district(district_name, city_id, admin_id, district_status) VALUES (?,?,?,?) ";
				$params = array($data_name, $parent_id, $admin_id, 1);
			}else if($address_type=='commune'){	
				$strsql = "INSERT INTO nham_commune(commune_name, district_id, admin_id, commune_status) VALUES (?,?,?,?) ";
				$params = array($data_name, $parent_id, $admin_id, 1);
			}
			$query = $this->db->query($strsql , $params);
			$insert_shop_id = $this->db->insert_id();
			$response=$insert_shop_id;
			if($this->IsNullOrEmptyString($insert_shop_id)){
				$response["is_insert"] = false;
				$response["message"] = "Invalid ID!";
			}
			return $response;
				
		}else{
			$response["is_insert"] = false;
			$response["message"] = $validate;
		}
	
		return $response;
	}
	
	public function deleteShopAddress($req_data){
		//$this->db->trans_begin();
		$address_type = $req_data["address_type"];
		$id = $req_data["id"];
	
		$response = array();
		$validate = $this->validateInput($address_type);
		$validate2 = $this->validateInput($id);
	
		if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2)){
			$strsql = "DELETE from nham_".$address_type." where ".$address_type."_id=?";
			$params = array($id);
				
			$query = $this->db->query($strsql , $params);
			$insert_shop_id = $this->db->insert_id();
			$response=$insert_shop_id;
			if($this->IsNullOrEmptyString($insert_shop_id)){
				$response["is_insert"] = false;
				$response["message"] = "Invalid ID!";
			}
			return $response;
	
		}else{
			$response["is_insert"] = false;
			$response["message"] = $validate;
		}
	
		return $response;
	}
		
	public function updateShopAddress($req_data){
		//$this->db->trans_begin();
		$id = $req_data["id"];
		$address_type = $req_data["address_type"];
		$data_name = $req_data["data_name"];
		$parent_id = $req_data["parent_id"];
		$status = $req_data["status"];
		$admin_id = $req_data["admin_id"];
		$response = array();
		$validate = $this->validateInput($address_type);
		$validate2 = $this->validateInput($data_name);
		$validate3 = $this->validateInput($parent_id);
		$validate4 = $this->validateInput($admin_id);
		$validate5 = $this->validateInput($id);
		$validate6 = $this->validateInput($status);
	
		if($this->IsNullOrEmptyString($validate) && $this->IsNullOrEmptyString($validate2) && $this->IsNullOrEmptyString($validate3) && $this->IsNullOrEmptyString($validate4) && $this->IsNullOrEmptyString($validate5) && $this->IsNullOrEmptyString($validate6)){
				
			$strsql = "UPDATE nham_".$address_type." set ".$address_type."_name=?, admin_id=?, ".$address_type."_status=? where ".$address_type."_id=?";
			$params = array($data_name, $admin_id, $status, $id);
				
			$query = $this->db->query($strsql , $params);
			$insert_shop_id = $this->db->insert_id();
			$response=$insert_shop_id;
			if($this->IsNullOrEmptyString($insert_shop_id)){
				$response["is_insert"] = false;
				$response["message"] = "Invalid ID!";
			}
			return $response;
	
		}else{
			$response["is_insert"] = false;
			$response["message"] = $validate;
		}
	
		return $response;
	}
	
	
	public function getListShopAddressByNameCombo($address_type, $srchname, $parent_id , $limit){
		if($address_type=='country'){
			$sql = "SELECT country_id, country_name, country_status, country_last_update FROM nham_country
				WHERE country_name LIKE ? AND country_id >=? 
				ORDER BY country_id DESC 
				limit ?";
		}else if($address_type=='city'){
			$sql = "SELECT city_id, city_name, city_status, city_last_update FROM nham_city
				WHERE city_name LIKE ? AND country_id=? 
				ORDER BY city_id DESC
				limit ?";
		}else if($address_type=='district'){
			$sql = "SELECT district_id, district_name, district_status, district_last_update FROM nham_district
				WHERE district_name LIKE ? AND city_id=? 
				ORDER BY district_id DESC
				limit ?";
		}else if($address_type=='commune'){
			$sql = "SELECT commune_id, commune_name, commune_status, commune_last_update FROM nham_commune
				WHERE commune_name LIKE ? AND district_id=? 
				ORDER BY commune_id DESC
				limit ?";
		}
	
		$srchname = "%".$srchname."%";
		$parent_id= (int)$parent_id;
		$limit = (int)$limit;
	
		$query = $this->db->query($sql, array($srchname, $parent_id, $limit));
	
		$data = $query->result();
	
		return $data;
	}
	
	
	function validateInput($data){

		if($this->IsNullOrEmptyString($data)){
			return "Invalid Data!";
		}		
		return "";
		
	}
	
	function IsNullOrEmptyString($variable){
		return (!isset($variable) || trim($variable)==='');
	}

}

?>
