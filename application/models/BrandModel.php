<?php
class BrandModel extends CI_Model{
	
	function getAllBrand(){
		
		$query = $this->db->query('SELECT * FROM nham_brand');
		$data = $query->result();
		return $data;
		
	}
	
	function getBrandByNameCombo($brandname , $limit){
		
		$sql = "SELECT brand_id,brand_name,brand_remark FROM nham_brand
				WHERE brand_name LIKE ? and brand_status=1 
				ORDER BY brand_id DESC 
				limit ?";
		$brandname = "%".$brandname."%";
		$limit = (int)$limit;
		$query = $this->db->query($sql, array($brandname, $limit) );
		$data = $query->result();
		return $data;
		
	}
	
	function getBrandById($brandid){
		
		$query = $this->db->query('SELECT * FROM nham_brand WHERE brand_id = ?', $brandid);
		$data = $query->result();
		return $data;
		
	}
	
	function insertBrand( $brandarr ){
		
	 	$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_brand(brand_name, brand_remark) values (? , ?)', $brandarr); 
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["brand_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
}
?>