<?php
class FacilityMapShopModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function deleteFacilityMapShop( $facility_map , $shop_id ){
		
		$q_mark = "(";
		$param = array();
		for($i=0 ; $i<count($facility_map); $i++){
			$q_mark .= "(?,?),";
			array_push($param, $facility_map[$i] , $shop_id);
		}
		$q_mark = substr($q_mark, 0, -1);
		$q_mark .= ")";
		
		$sql = "DELETE FROM nham_shop_facility_map  WHERE (sh_facility_id, shop_id) in ".$q_mark;
		$query = $this->db->query($sql, $param);
		
		return $query;
	}
}
?>