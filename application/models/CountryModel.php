<?php
class CountryModel extends CI_Model{

	public function getAllCountry($status){
		
		$sql = "SELECT * FROM nham_country";
		$limit = (int)$limit;
		$query = $this->db->query($sql , $status);
		$data = $query->result();
		return $data;
		
	}
	
}
?>