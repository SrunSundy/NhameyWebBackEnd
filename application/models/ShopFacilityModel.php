<?php
class ShopFacilityModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function getShopFacilityByName( $shopfacility , $limit ,  $status){
		
    	$sql = "SELECT sh_facility_id,sh_facility_icon,sh_facility_name from nham_shop_facility
    			WHERE REPLACE(sh_facility_name, ' ', '') LIKE REPLACE(?,' ','')  AND sh_facility_status in (?,?)
    			ORDER BY sh_facility_id DESC 
    			LIMIT ?";
    	$cate = "%".$shopfacility."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($cate, $status["statusA"] , $status["statusB"] ,$limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function getAllShopFacility(){
		
		$sql = "SELECT sh_facility_id,sh_facility_icon,sh_facility_name from nham_shop_facility
				WHERE sh_facility_status = 1
    			ORDER BY sh_facility_id DESC ";
    
    	$query = $this->db->query($sql);
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertShopFacility( $shopfacilityarr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_shop_facility(sh_facility_name , sh_facility_icon , sh_facility_remark) values (? , ? , ?)', $shopfacilityarr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["sh_facility_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>