<?php
class CityModel extends CI_Model{
	
	public function getAllCityByCountry($countryid){
	
		$sql = "SELECT city_id,city_name FROM nham_city WHERE country_id = ? and city_status = 1 ";
		$query = $this->db->query($sql , (int)$countryid);
		$data = $query->result();
		return $data;
	
	}
}
?>