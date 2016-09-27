<?php
class CityModel extends CI_Model{
	
	public function getAllCityByCountry($countryid){
	
		$sql = "SELECT city_id,city_name FROM nham_country WHERE country_id = ? and city_status = 1 ";
		$limit = (int)$limit;
		$query = $this->db->query($sql , $countryid);
		$data = $query->result();
		return $data;
	
	}
}
?>