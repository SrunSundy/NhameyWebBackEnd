<?php
class CountryModel extends CI_Model{

	public function getAllCountry($status){
		
		$sql = "SELECT country_id,country_name FROM nham_country WHERE country_status IN (? , ?)";
		$query = $this->db->query($sql , $status);
		$data = $query->result();
	
		return $data;
		
	}
	
	public function insertCountry( $data ){
		
		$query = $this->db->query('INSERT INTO nham_country(country_name) values (?)', $data);
		$insert_id = $this->db->insert_id();
		
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		
		$data["country_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>