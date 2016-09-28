<?php
class CountryModel extends CI_Model{

	public function getAllCountry($status){
		
		$sql = "SELECT country_id,country_name FROM nham_country WHERE country_status IN (? , ?)";
		$query = $this->db->query($sql , $status);
		$data = $query->result();
		return $data;
		
	}
	
}
?>