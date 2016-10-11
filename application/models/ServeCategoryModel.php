<?php
class ServeCategoryModel extends CI_Model{
	
	function getServeCategoryByName( $cate , $limit ,  $status){
		
    	$sql = "SELECT serve_category_id,serve_category_icon,serve_category_name from nham_serve_category 
    			WHERE REPLACE(serve_category_name, ' ', '') LIKE REPLACE(?,' ','')  AND serve_category_status in (?,?)
    			ORDER BY serve_category_id DESC 
    			LIMIT ?";
    	$cate = "%".$cate."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($cate, $status["statusA"] , $status["statusB"] ,$limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function insertServeCategory( $servecatearr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_serve_category(serve_category_name , serve_category_icon , serve_category_remark) values (? , ? , ?)', $servecatearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["serve_category_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>