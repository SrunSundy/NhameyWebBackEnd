<?php
class BrandModel extends CI_Model{
	
	function getAllBrand(){
		
		$query = $this->db->query('SELECT * FROM nham_brand');
		$data = $query->result();
		return $data;
		
	}
	
	function getBrandByName($brandname){
		
		$query = $this->db->query("SELECT * FROM nham_brand WHERE brand_name LIKE ? limit 10","%".$brandname."%");
		$data = $query->result();
		return $data;
		
	}
	
	function getBrandById($brandid){
		
		$query = $this->db->query('SELECT * FROM nham_brand WHERE brand_id = ?', $brandid);
		$data = $query->result();
		return $data;
		
	}
}
?>