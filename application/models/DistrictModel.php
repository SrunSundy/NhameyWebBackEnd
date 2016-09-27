<?php
class DistrictModel extends CI_Model{
	
	public function getAllDistrictByCity($cityid){
	
		$sql = "SELECT district_id,district_name FROM nham_district WHERE city_id = ? AND district_status = 1";
		$limit = (int)$limit;
		$query = $this->db->query($sql , $cityid);
		$data = $query->result();
		return $data;
	
	}
}

?>