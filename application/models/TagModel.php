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
    function getTageByProId( $proid ){
		
		$sql = "SELECT 
					t.tag_id,
					t.tag_name
				FROM nham_product_tag_map m
				LEFT JOIN nham_product_tag t ON t.tag_id =m.tag_id
				WHERE m.pro_id = ? and t.tag_status = 1 ";
		$query = $this->db->query($sql, $proid);
		$response = $query->result();
		return $response;
	}
	public function deleteTageById( $serve_map, $pro_id ){
		
		$q_mark = "(";
		$param = array();
		for($i=0 ; $i<count($serve_map); $i++){
			$q_mark .= "(?,?),";
			array_push($param, $serve_map[$i] , $pro_id);
		}
		$q_mark = substr($q_mark, 0, -1);
		$q_mark .= ")";
		
		$sql = "DELETE FROM nham_serve_cate_map_pro  WHERE (serve_category_id, pro_id) in ".$q_mark;
		$query = $this->db->query($sql, $param);
		
		return $query;
		
	}
}
?>