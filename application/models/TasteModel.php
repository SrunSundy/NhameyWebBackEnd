<?php
class TasteModel extends CI_Model{
	
	function getTasteByNameCombo( $Taste , $limit ){
		
    	$sql = "SELECT taste_id,taste_name from nham_taste 
    			WHERE taste_name LIKE ? AND taste_status = 1 
    			ORDER BY taste_id DESC 
    			LIMIT ?";
    	$Taste = "%".$Taste."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($Taste, $limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertTaste($Tastearr){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_taste(taste_name, taste_remark) values (? , ?)', $Tastearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["taste_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>