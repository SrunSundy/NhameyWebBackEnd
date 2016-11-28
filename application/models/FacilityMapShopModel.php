<?php
class FacilityMapShopModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function deleteFacilityMapShop( $facility_map_id ){
		
		$sql = "DELETE FROM nham_shop_facility_map WHERE shop_facility_map_id = ?";
		$query = $this->db->query($sql, $facility_map_id);
		
		return $query;
	}
}
?>