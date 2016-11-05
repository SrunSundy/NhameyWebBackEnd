<?php
class TagModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function getAllTags(){
		
    	$sql = "SELECT tag_id,tag_name from nham_product_tag
    			WHERE tag_status = 1 
    			ORDER BY tag_name DESC ";
    	
    	$query = $this->db->query($sql);
    	$data = $query->result();
    	return $data;
    	
	}
	

}
?>