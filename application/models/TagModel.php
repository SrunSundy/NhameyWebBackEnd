<?php
class TagModel extends CI_Model{
	 public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	function getTagByNameCombo($tagname , $limit){
		
    	$sql = "SELECT tag_id,tag_name from nham_product_tag
    			WHERE tag_name LIKE '%".$tagname."%' AND tag_status = 1 
    			ORDER BY tag_id DESC
    		    LIMIT $limit";
    	
    	$query = $this->db->query($sql);
    	$data = $query->result();
    	return $data;
    	
	}
	function insertTag($tagsarr){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO  nham_product_tag(tag_name) values (?)', $tagsarr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["tag_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}

}
?>