<?php
class ProductTypeModel extends  CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
    function getTypeByNameCombo( $cuisine , $limit ){
		
    	$sql = "SELECT product_type_id,product_type_name from nham_product_type
    			WHERE product_type_name LIKE ? AND product_type_status = 1 
    			ORDER BY product_type_id DESC 
    			LIMIT ?";
    	$cuisine = "%".$cuisine."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($cuisine, $limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertType( $typearr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_product_type(product_type_name, product_type_remark) values (? , ?)', $typearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["product_type_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
}
?>