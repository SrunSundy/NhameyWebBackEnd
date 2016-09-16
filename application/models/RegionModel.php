<?php
class RegionModel extends  CI_Model{
	
    function getRegionByNameCombo( $region , $limit ){
		
    	$sql = "SELECT region_id,region_name from nham_region 
    			WHERE region_name LIKE ? AND region_status = 1 
    			ORDER BY region_id DESC 
    			LIMIT ?";
    	$region = "%".$region."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($region, $limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertRegion( $regionarr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_region(region_name, region_remark) values (? , ?)', $regionarr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["region_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
}
?>