<?php
class CommuneModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getAllCommuneByDistrict($districtid){
	
		$sql = "SELECT commune_id,commune_name FROM nham_commune WHERE district_id = ? AND commune_status = 1";
		$query = $this->db->query($sql , $districtid);
		$data = $query->result();
		return $data;
	
	}
}

?>