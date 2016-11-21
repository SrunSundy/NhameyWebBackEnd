<?php
class ServeCategoryModel extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function getServeCategoryByName( $cate , $limit ,  $status){
		
    	$sql = "SELECT serve_category_id,serve_category_icon,serve_category_name from nham_serve_category 
    			WHERE REPLACE(serve_category_name, ' ', '') LIKE REPLACE(?,' ','')  AND serve_category_status in (?,?)
    			ORDER BY serve_category_type DESC 
    			LIMIT ?";
    	$cate = "%".$cate."%";
    	$limit = (int)$limit;
    	$query = $this->db->query($sql, array($cate, $status["statusA"] , $status["statusB"] ,$limit) );
    	$data = $query->result();
    	return $data;
    	
	}
	
	function getAllServeCategory(){
		
		$sql = "SELECT serve_category_id,serve_category_icon,serve_category_name from nham_serve_category
				WHERE serve_category_status = 1
				ORDER BY serve_category_type DESC";
		$query = $this->db->query($sql);
		$data = $query->result();
		return $data;
		
	}
	
	function getServeCategoryByShopId( $shopid ){
		
		$sql = "SELECT 
					m.serve_cate_map_shop_id,
					m.serve_category_id,
					c.serve_category_icon,
					c.serve_category_name
				FROM nham_serve_cate_map_shop m
				LEFT JOIN nham_serve_category c ON c.serve_category_id = m.serve_category_id
				WHERE m.shop_id = ? and c.serve_category_status = 1
				ORDER BY m.serve_cate_map_shop_id";
		$query = $this->db->query($sql, $shopid);
		$response = $query->result();
		return $response;
	}
	
	function insertServeCategory( $servecatearr ){
		
		$this->db->trans_start();
		$query = $this->db->query('INSERT INTO nham_serve_category(serve_category_name, serve_category_type , serve_category_icon , serve_category_remark, admin_id) values (? ,? , ? , ?, ?)', $servecatearr);
		$insert_id = $this->db->insert_id();
		$isinsert =  ($this->db->affected_rows() != 1) ? false : true;
		$this->db->trans_complete();
		$data["serve_category_id"] = $insert_id;
		$data["is_insert"] = $isinsert;
		return  $data;
		
	}
	
}
?>