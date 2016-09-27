<?php
class CommuneModel extends CI_Model{
	
	public function getAllCommuneByDistrict($districtid){
	
		$sql = "SELECT commune_id,commune_name FROM nham_commune WHERE district_id = ? AND commune_status = 1";
		$limit = (int)$limit;
		$query = $this->db->query($sql , $districtid);
		$data = $query->result();
		return $data;
	
	}
}

?>