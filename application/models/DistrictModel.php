<?php
class DistrictModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getAllDistrictByCity($cityid){
	
		$sql = "SELECT district_id,district_name FROM nham_district WHERE city_id = ? AND district_status = 1";
		$query = $this->db->query($sql , $cityid);
		$data = $query->result();
		return $data;
	
	}
}

?>