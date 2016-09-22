<?php
class CuisineModel extends  CI_Model{
	
    function getCuisineByNameCombo( $cuisine , $limit ){
		
    	$sql = "SELECT cuisine_id,cuisine_name from nham_cuisine 
    			WHERE cuisine_name LIKE ? AND cuisine_status = 1 
    			ORDER BY cuisine_id DESC 
    			LIMIT ?";
    	$cuisine = "%".$cuisine."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($cuisine, $limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertCuisine( $cuisinearr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_cuisine(cuisine_name, cuisine_remark) values (? , ?)', $cuisinearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["cuisine_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
}
?>